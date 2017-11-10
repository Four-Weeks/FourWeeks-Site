<?php
require_once("Conexao_MYSQL.php");

$URL = "ficha_".anti_inje($_POST['id'])."_".md5(uniqid(rand(), true));
$ext = strtolower(substr($_FILES['arquivo']['name'],-5));
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], "afiliados_ficha_cadastral/".$URL.$ext)){
$ARQUIVO = "https://www.fourweeks.com.br/API/afiliados_ficha_cadastral/".$URL.$ext;

if (mysqli_query($connect, "UPDATE `afiliados` SET `ficha_cadastral`= '".$ARQUIVO."' WHERE id = '".anti_inje($_POST['id'])."'")) {
echo '<h2 class="fadeInDown animated" style="text-align: center;color: #5cb85c;">OK: arquivo salvo, pode continuar !</h2>';
} else {
echo '<h2 class="fadeInDown animated" style="text-align: center;color: #d9534f;">ERRO: não conseguimos salvar o arquivo, tente novamente mais tarde!</h2>';
}

}else{
$ARQUIVO = "ERRO_SUBIR_FICHA";

echo '<h2 class="fadeInDown animated" style="text-align: center;color: #d9534f;">ERRO: não conseguimos salvar o arquivo, tente novamente mais tarde!</h2>';
}

?>