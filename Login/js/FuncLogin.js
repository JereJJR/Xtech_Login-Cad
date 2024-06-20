
function BuscaAcesso() {
    statusPage = "1";
    statusBD = "1";
    var TXTlogin = document.getElementById("usuario").value;
    var TXTsenha = document.getElementById("senha").value;
    $.ajax({
        type: 'POST',
        url: '../PDO/BD_login.php',      
        data: {
            'TXTlogin': TXTlogin, 'TXTsenha': TXTsenha,
            statusPage: statusPage, statusBD: statusBD
        },

        success: (retorno) => {           
            if (retorno == 1) {               
                window.location.href = ' ../Inicial/CarregaInicio.php';
            }
            else if (retorno == 2) {
                alert('ERRO: Usuário ou senha inválidos.')
            }
            else {
                console.log(retorno);
                alert("Erro Desconhecido");
            }
        }
    });
}

function alertaCrie(statusPage) {
    console.log(statusPage);
    alert("Entre em contato com o Administrador para criar conta");
}

function abreCadUser() {
    window.location.href = '../Cad_Login/cad_login.php?PL=1'; // Aqui o sistema manda o novo usuario para pagina de cadastro com o PL = 1 (pagina de login = ativo)
}