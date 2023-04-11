<?php
include_once('conexao.php');

if($_POST)
{
    $Id_Usuario = $_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            'delete from Usuario where Id_Usuario=:Id_Usuario'
        );

        $sql->execute(array(
            ':Id_Usuario'=>$Id_Usuario
        ));

        if($sql->rowCount()==1)
        {
            echo "<p>Dados excluidos com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>