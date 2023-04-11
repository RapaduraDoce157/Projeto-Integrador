<?php
include_once('conexao.php');

if($_POST)

{

$Id_Usuario = $_POST ['txtID'];
$Nome_Usuario = $_POST ['txtNome'];
$Login_Usuario = $_POST ['txtLogin'];
$Senha_Usuario = $_POST ['txtSenha'];
$Cadastro_Usuario = $_POST ['txtCadastro'];
$Status_Usuario = $_POST ['txtStatus'];
$Obs_Usuario = $_POST ['txtObs'];


try
    {
        $sql = $conn->prepare(
            '
            update Usuario set
            Nome_Usuario=:Nome_Usuario,
            Login_Usuario=:Login_Usuario,
            Senha_Usuario=:Senha_Usuario,
            Cadastro_Usuario=:Cadastro_Usuario,
            Status_Usuario=:Status_Usuario,
            Obs_Usuario=:Obs_Usuario,
            where Id_Usuario=:Id_Usuario'
        );

        $sql->execute(array(
            ':Id_Usuario'=>$Id_Usuario,
            ':Nome_Usuario'=>$Nome_Usuario,
            ':Login_Usuario'=>$Login_Usuario,
            ':Senha_Usuario'=>$Senha_Usuario,
            ':Cadastro_Usuario'=>$Cadastro_Usuario,
            ':Status_Usuario'=>$Status_Usuario,
            ':Obs_Usuario'=>$Obs_Usuario,

        ));
        if($sql->rowCount()==1)
                {
                    echo "<p>Dados alterados com sucesso</p>";
                    echo '<a href="Sistema.php?Tela=Usuario">Voltar</a>';
                }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
