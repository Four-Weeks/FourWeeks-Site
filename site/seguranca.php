<?php

/**
* Sistema de segurança com acesso restrito
*
* Usado para restringir o acesso de certas páginas do seu site
*
* @author Thiago Belem <contato@thiagobelem.net>
* @link http://thiagobelem.net/
*
* @version 1.0
* @package SistemaSeguranca
*/

//  Configurações do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?

$_SG['caseSensitive'] = true;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'mysql.hostinger.com.br';    // Servidor MySQL
$_SG['usuario'] = 'u445734061_4week';          // Usuário MySQL
$_SG['senha'] = 'cletha415623';    // Senha MySQL
$_SG['banco'] = 'u445734061_4week';            // Banco de dados MySQL

//$_SG['servidor'] = 'us-cdbr-iron-east-04.cleardb.net';    // Servidor MySQL
//$_SG['usuario'] = 'b21037bad4fc29';          // Usuário MySQL
//$_SG['senha'] = '4324d732';    // Senha MySQL
//$_SG['banco'] = 'heroku_cd19466d30e40ae';            // Banco de dados MySQL

$_SG['paginaLogin'] = 'login.php'; // Página de login
$_SG['paginaLogin2'] = 'admin.php';
$_SG['paginaLogin3'] = 'login2.php';

$_SG['tabela'] = 'contatos';       // Nome da tabela onde os usuários são salvos
$_SG['tabela2'] = 'lancamento';
// ==============================

// ======================================
//   ~ Não edite a partir deste ponto ~
// ======================================

// Verifica se precisa fazer a conexão com o MySQL
if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = @mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível 
conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG
['banco']."].");
}

// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true)
  @session_start();

/**
* Função que valida um usuário e senha
*
* @param string $usuario - O usuário a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuário foi validado ou não (true/false)
*/

function validaUsuario($usuario, $senha) {
  global $_SG;

  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

  // Usa a função addslashes para escapar as aspas
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);

  // Monta uma consulta SQL (query) para procurar um usuário
  $sql = "SELECT `id`, `nome`,`profissao`,`email`,`foto`,`password`,`progresso`,`licao`,`momento` FROM `".$_SG
['tabela']."` WHERE ".$cS." `email` = '".$nusuario."' AND ".$cS." `password` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);

  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
    $_SESSION['usuarioProfissao'] = $resultado['profissao'];
    $_SESSION['usuarioEmail'] = $resultado['email'];
    $_SESSION['usuarioFoto'] = $resultado['foto'];
    $_SESSION['usuarioPassword'] = $resultado['password'];
    $_SESSION['usuarioProgresso'] = $resultado['progresso'];
    $_SESSION['usuarioLicao'] = $resultado['licao'];
    $_SESSION['usuarioMomento'] = $resultado['momento'];
    
    
    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }

    return true;
  }
}

function validaUsuario2($usuario, $senha) {
  global $_SG;

  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

  // Usa a função addslashes para escapar as aspas
  $nusuario2 = addslashes($usuario);
  $nsenha2 = addslashes($senha);

  // Monta uma consulta SQL (query) para procurar um usuário
  $sql2 = "SELECT `id`,`email`,`password` FROM `".$_SG['tabela2']."` WHERE ".$cS." `email` = '".$nusuario2."' AND ".$cS." `password` = '".$nsenha2."' LIMIT 1";
  $query2 = mysql_query($sql2);
  $resultado2 = mysql_fetch_assoc($query2);

  // Verifica se encontrou algum registro
  if (empty($resultado2)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado2['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    
    $_SESSION['usuarioEmail'] = $resultado2['email'];
   
    $_SESSION['usuarioPassword'] = $resultado2['password'];
  
    
    
    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }

    return true;
  }
}
/**
* Função que protege uma página
*/
function protegePagina() {
  global $_SG;

  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante();
  }
  else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if ( !validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitante();
      }
    }
  }
}

function protegePagina2() {
  global $_SG;

  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante2();
  }
  else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if ( !validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitante2();
      }
    }
  }
}
function protegePagina3() {
  global $_SG;

  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante3();
  }
  else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if ( !validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitante3();
      }
    }
  }
}


/**
* Função para expulsar um visitante
*/
function expulsaVisitante() {
  global $_SG;

  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin']);
}
function expulsaVisitante2() {
  global $_SG;

  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin2']);
}
function expulsaVisitante3() {
  global $_SG;

  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin3']);
}