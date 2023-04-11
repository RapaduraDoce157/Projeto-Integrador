<?
include_once('conexao.php');

$Id_Usuario ="";
$Nome_Usuario ="";
$Login_Usuario ="";
$Senha_Usuario ="";
$Cadastro_Usuario ="";
$Status_Usuario ="";
$Obs_Usuario="";


if($_POST);
{
    $Id_Usuario = $_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from usuario where Id_Usuario='.$Id_Usuario);
        
        if($sql->rowCount()==1)
        {
?>