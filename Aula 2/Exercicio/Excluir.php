<?php
include_once('conexao.php');
if($_POST)
{
    $Id_Usuario = $_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            'delete from usuario where Id_Usuario=:Id_Usuario'
        );

        $sql->execute(array(
            ':Id_Usuario'=>$Id_Usuario
        ));

        if($sql->rowCount()==1)
        {
            echo "<p>Dados excluidos com sucesso</p>";
            echo '<a href="Sistema.php?Tela=Usuario">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>