<?php

// sleep(3);

// print_r($_POST);
// return;
include_once('conexao.php');

if($_POST)
{
    $Nome_Usuario = $_POST['txtNome'];
    $Login_Usuario = $_POST['txtLogin'];
    $Senha_Usuario = $_POST['txtSenha'];
    $Status_Usuario = $_POST['txtStatus'];
    $Obs_Usuario = $_POST['txtObs'];

    try {
        $sql = $conn->prepare(
            "insert into Usuario
            (Nome_Usuario,Login_Usuario,Senha_Usuario,Status_Usuario,Obs_Usuario)
            values
            (:Nome_Usuario,:Login_Usuario,:Senha_Usuario,:Status_Usuario,:Obs_Usuario)"
        );

        $sql->execute(array(
            ':Nome_Usuario'=>$Nome_Usuario,
            ':Login_Usuario'=>$Login_Usuario,
            ':Senha_Usuario'=>$Senha_Usuario,
            ':Status_Usuario'=>$Status_Usuario,
            ':Obs_Usuario'=>$Obs_Usuario
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p id='idGerado'>".$conn->lastInsertId()."</p>";
        }
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:index.php');
}

?>