<?php
//print_r($_POST);
//return;

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
        $sql = $conn->query('select * from Usuario where Id_Usuario='.$Id_Usuario);
        
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

                echo "
                <p>Id_Usuario: <span id='idGerado'>$Id_Usuario</span></p>
                 <p>Nome_Usuario:  <span id='NomeUsuario'>$Nome_Usuario</span></p>
                   <p>Login_Usuario:  <span id='LoginUsuario'>$Login_Usuario</span></p>
                   <p>Senha_Usuario:  <span id='SenhaUsuario'>$Senha_Usuario</span></p>
                   <p>Cadastro_Usuario:  <span id='CadastroUsuario'>$Cadastro_Usuario</span></p>
                   <p>Status_Usuario:  <span id='StatusUsuario'>$Status_Usuario</span></p>
                   <p>Obs_Usuario:  <span id='ObsUsuario'>$Obs_Usuario</span></p>
                ";
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