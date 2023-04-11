<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <DIV align="center">
        <title>Document</title>
</head>

<body>

    <form action="" class="form-control" method="POST" onsubmit="return false">
        <div class="row">
            <div class="col-sm-12">
                <h1>Formulário de cadastro Champions League</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <input type="number" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
            </div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data Cadastro">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-3">
                
                <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome completo">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
            </div>
            <div class="col-sm-3">
                <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha">
            </div>
            <div class="col-sm-3">
                <select name="txtStatus" id="txtStatus" class="form-control">
                    <option value="" selected> Selecione o status </option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Desativado</option>
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-sm-12">
                <button name="btoPesquisa" class="btn btn-primary" onclick="Pesquisar()">Pesquisar</button>
                <button name="btoCadastrar" class="btn btn-success" onclick="Cadastrar()">Cadastrar</button>
                <button name="btoAlterar" class="btn btn-warning" onclick="Alterar()">Alterar</button>
                <a name="btoLimpar" class="btn btn-dark" href="index.php">Limpar</a>
                <button name="btoExcluir" class="btn btn-danger" onclick="Excluir()">Excluir</button>
                <button name="btoTabela" class="btn btn-dark" onclick="AbrirTable()">Tabela</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="abrirTabela"></div>

            <div class="col-sm-12" id="Resultado"></div>
        </div>


    </form>

    <script>


    </script>

</body>

</html>