<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="estillo.css">
    <title>Document</title>

    <script src="../Jquery/jquery-3.6.4.js"></script>
    <script src="../Jquery/jquery.dataTables.min.js"></script>

    <script src="Script.js"></script>
</head>
<body>

    <div class="container">
        <div class="row" id="topo">
            <div class="col-sm-12">
            <?php include_once("_Topo.php");?>
            </div>
        </div>
        <div class="row" id="conteudo">
            <div class="col-sm-3 menu">
                <?php include_once('_Menu.php'); ?>
            </div>
            <div class="col-sm-9 mt-2">
                <?php
                if($_GET)
                {
                    if(isset($_GET['Tela']))
                    {
                        $tela = $_GET['Tela'];
                        if($tela == "Usuario")
                        {
                            include_once('Cadastro.php');
                        }
                        elseif($tela == "Categoria")
                        {
                            include_once('Categoria.php');
                        }
                        elseif($tela == "Produto")
                        {
                            echo'<h1> Produto </h1>';
                        }
                        elseif($tela == "Tabela")
                        {
                            include_once('Tabela_Usuario.php');
                        }
                    }
                    else
                    {
                        echo'
                        <h1> ERRO 404 </h1>
                        ';
                    }
                }
                else
                {
                     include_once("_Home.php");
                }
                ?>
                     
            </div>
        </div>
        <div class="row" id="Rodape">
            <?php include_once("_Rodape.php");?>
        </div>
        
    </div>

</body>
</html>