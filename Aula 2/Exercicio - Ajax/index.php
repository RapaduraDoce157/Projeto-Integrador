<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estillo.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
</head>
<body>
    <?php
    $mensagem = "";


   
if($_POST)
{
include_once('conexao.php');
    {

        try
        {
            $LoginUsuario = $_POST['txtLogin'];
            $SenhaUsuario = $_POST['txtSenha'];
            
            $sql = $conn->query("select * from Usuario where Login_Usuario = '$LoginUsuario' and Senha_Usuario = '$SenhaUsuario'");
    
            if($sql->rowCount()==1)
            {
                session_start();
                foreach($sql as $linha)
                {
                    $_SESSION['IdUsuario'] = $linha[0];
                    $_SESSION['NomeUsuario'] = $linha[1];
                    $_SESSION['LoginUsuario'] = $linha[2];
                }
                
                header('Location:sistema.php');
            }
            else
            {
                
               $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
            }
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
       
    }
}
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="" class="form-control" method="POST">
                    <div class="row">
                        <div class="col-sm-12 p-1">
                        <div class="card bg-dark text-white">
                        <img src="/Exercicio - Ajax/logo-champions.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h1 class="card-title"></h1>
                        </div>
                        </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-12 p-2">Login
                            <input type="text" name="txtLogin" id="txtLogin"placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        <div class="col-sm-12 p-2">Senha
                            <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        
                        <?=$mensagem?>
                        <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 p-2">
                            <button name="btoOK" id="btoOK" class="btn btn-primary form-control" formaction="index.php">Entrar</button>
                        </div>
                        <div class="col-sm-3"></div>
                        </div>
                        <?$mensagem?>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>