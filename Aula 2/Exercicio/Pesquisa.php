<?php
include_once('conexao.php');

$Id_Usuario='';
$Nome_Usuario='';
$Login_Usuario='';
$Senha_Usuario='';
$Cadastro_Usuario='';
$Status_Usuario='';
$Obs_Usuario='';

if($_POST)
{
    $Id_Usuario = $_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from usuario where Id_Usuario='.$Id_Usuario);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $Id_Usuario=$linha[0];
                $Nome_Usuario=$linha[1];
                $Login_Usuario=$linha[2];
                $Senha_Usuario=$linha[3];
                $Cadastro_Usuario=$linha[4];
                $Status_Usuario=$linha[5];
                $Obs_Usuario=$linha[6];

                // echo "
                //     <p>Id_Usuario: $Id_Usuario</p>
                //     <p>Nome_Usuario: $Nome_Usuario</p>
                //     <p>Login_Usuario: $Login_Usuario</p>
                //     <p>Senha_Usuario: $Senha_Usuario</p>
                //     <p>Cadastro_Usuario: $Cadastro_Usuario</p>
                //     <p>Status_Usuario: $Status_Usuario</p>
                //     <p>Obs_Usuario: $Obs_Usuario</p>
                // ";
                // echo '<a href="index.php">Voltar</a>';
            }
        }
        else
        {
            echo "<p>Erro, dados não encontrado</p>";
            // echo '<a href="index.php">Voltar</a>';
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}

?>