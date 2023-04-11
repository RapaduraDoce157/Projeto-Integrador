function AbrirTable() {

    $("#abrirTabela").load("Tabela_Usuario.php");
}

function Cadastrar() {

    let Nome_Usuario = $('#txtNome').val();
    let Login_Usuario = $('#txtLogin').val();
    let Senha_Usuario = $('#txtSenha').val();
    let Status_Usuario = $('#txtStatus').val();
    let Obs_Usuario = $('#txtObs').val();

    let action = 'Usuario_Cadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data:
        {
            txtNome: Nome_Usuario,
            txtLogin: Login_Usuario,
            txtSenha: Senha_Usuario,
            txtStatus: Status_Usuario,
            txtObs: Obs_Usuario
        },
        beforsend: function () {
            $("#Resultado").html("ENVIANDO...");
        },
        success: function (data, status, xrh) {
            $("#Resultado").empty().html(data);
        },
        error: function (jqxr, textStatus, errorMessage) {
            $('#Resultado').empty('Erro' + errorMessage);
        }
    });
}

function Pesquisar() {

    let Id_Usuario = $('#txtID').val();

    let action = 'Pesquisa.php';

    $.ajax({
        url: action,
        type: 'post',
        data:
        {
            txtID: Id_Usuario,
            
        },
        beforsend: function () {
            $("#Resultado").html("ENVIANDO...");
        },
        success: function (data, status, xrh) {
            $("#Resultado").empty().html(data);
            $("#txtID").val($('#idGerado').text());
            $("#txtNome").val($('#NomeUsuario').text());
            $("#txtLogin").val($('#LoginUsuario').text());
            $("#txtSenha").val($('#SenhaUsuario').text());
            $("#txtData").val($('#CadastroUsuario').text());
            $("#txtStatus").val($('#StatusUsuario').text());
            $("#txtObs").val($('#ObsUsuario').text());
        },

        error: function (jqxr, textStatus, errorMessage) {
            $('#Resultado').empty('Erro' + errorMessage);
        }
    });
}
 
    function Alterar() {

        console.log('Alterando')
         
        let Id_Usuario = $('#txtID').val();
        let Nome_Usuario = $('#txtNome').val();
        let Login_Usuario = $('#txtLogin').val();
        let Senha_Usuario = $('#txtSenha').val();
        let Status_Usuario = $('#txtStatus').val();
        let Obs_Usuario = $('#txtObs').val();
    
        let action = 'Alterar.php';
    
        $.ajax({
            url: action,
            type: 'post',
            data:
            {
                txtID: Id_Usuario,
                txtNome: Nome_Usuario,
                txtLogin: Login_Usuario,
                txtSenha: Senha_Usuario,
                txtStatus: Status_Usuario,
                txtObs: Obs_Usuario
            },
            beforsend: function () {
                $("#Resultado").html("ENVIANDO...");
            },
            success: function (data, status, xrh) {
                $("#Resultado").empty().html(data);
                Pesquisar()
            },
            error: function (jqxr, textStatus, errorMessage) {
                $('#Resultado').empty('Erro' + errorMessage);
            }
        });
    }

    function Excluir() {

        console.log('Excluindo')
         
        let Id_Usuario = $('#txtID').val();
    
        let action = 'Excluir.php';
    
        $.ajax({
            url: action,
            type: 'post',
            data:
            {
                txtID: Id_Usuario

            },
            beforsend: function () {
                $("#Resultado").html("ENVIANDO...");
            },
            success: function (data, status, xrh) {
                $("#Resultado").empty().html(data);
            },
            error: function (jqxr, textStatus, errorMessage) {
                $('#Resultado').empty().html('Erro' + errorMessage);
            }
        })
    }

