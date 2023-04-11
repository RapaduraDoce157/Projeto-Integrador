<?php
include_once('conexao.php');

if($_POST)

{

$Id_Usuario = $_POST ['txtID'];
$Nome_Usuario = $_POST ['txtNome'];
$Login_Usuario = $_POST ['txtLogin'];
$Senha_Usuario = $_POST ['txtSenha'];
$Status_Usuario = $_POST ['txtStatus'];
$Obs_Usuario = $_POST ['txtObs'];


try
    {
        $sql = $conn->prepare('
            update Usuario set
            Nome_Usuario =:Nome_Usuario,
            Login_Usuario =:Login_Usuario,
            Senha_Usuario =:Senha_Usuario,
            Status_Usuario =:Status_Usuario,
            Obs_Usuario =:Obs_Usuario
            where Id_Usuario =:Id_Usuario'
        );

        $sql->execute(array(
            ':Id_Usuario'=>$Id_Usuario,
            ':Nome_Usuario'=>$Nome_Usuario,
            ':Login_Usuario'=>$Login_Usuario,
            ':Senha_Usuario'=>$Senha_Usuario,
            ':Status_Usuario'=>$Status_Usuario,
            ':Obs_Usuario'=>$Obs_Usuario

        ));
        if($sql->rowCount()==1)
                {
                    echo "<p>Dados alterados com sucesso</p>";

                }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
