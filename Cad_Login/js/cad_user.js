$('#div-empresa').hide();
$('#login').prop('disabled', true);
$('#pass').prop('disabled', false);

// checkEmp = $("input[id='CHterceiro']");
// empresa;
let TextoMsg_G;
const urlParams = new URLSearchParams(window.location.search);
let codLogin = urlParams.get('PL');


// console.log(codLogin);

// if (codLogin == '1') {
//     $('#div-nivel').hide();
// }
// else {
//     $('#div-nivel').show();
// }
// checkEmp.change(function (event) {
//     var checkEmp = event.target;

//     if (checkEmp.checked) {
//         $('#div-empresa').show();
//         document.getElementById("nivel").value = "terceiro";
//         $("#nivel").prop('disabled', true)

//     } else {
//         $('#div-empresa').hide();
//         document.getElementById("nivel").value = "adm";
//         $("#nivel").prop('disabled', false)

//     }
// });


/*=============================================================================
========================Area do Modal (Mensagem)==============================
===============================================================================*/
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modalMSG");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
};
/*=============================================================================*/


function showPass() {
    var senha = document.getElementById("pass");
    var confsenha = document.getElementById("confSenha");
    if (senha.type === "password" & confsenha.type === "password") {
        senha.type = "text";
        confsenha.type = "text";
    } else {
        senha.type = "password";
        confsenha.type = "password";
    }
}


function BTTcad() {
    // alert("Tudo ok");
    var statusBD = "2";
    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var Lsobre = sobrenome.substr(0, 2)
    var email = document.getElementById("email").value;
   
    var pass = document.getElementById("pass").value;
    var confpass = document.getElementById("confSenha").value;
   


    var statusPage = "2";

    if (pass == confpass) {   
        
        document.getElementById("login").value = nome + "@" + Lsobre + "." + "Xtech";   
        var login = document.getElementById("login").value;    

            $.ajax({
            type: 'POST',
            url: '../PDO/BD_login.php',
            // url: 'processa_usuario.php', // Substitua 'seu_script.php' pelo caminho do seu script no servidor
  
            data: {
                'nome': nome, 'sobrenome': sobrenome,
                'email': email, 'login': login,                
                'pass': pass,
                statusPage: statusPage,
                statusBD: statusBD
            },

            success: (retorno) => {
                //alert ("tudo ok");
                if(retorno == 1) {
console.log(retorno);
                     TextoMsg_G = 'Cadastro realizado com sucesso!!!' + "<br>" + "<br>" +
                        'Seu Login é ' + login + "<br>" + "<br>" +
                        'O login é composto pelo "nome" + "@" + "as 2 primeiras letras do sobrenome" + ".Xtech" ';
                         //VoltaInicio();

                        MSGaviso_2();
                     
             
                }else if (retorno == -1) {
                    console.log(retorno);
                    alert("Erro na inserção do BD");
            
                }else if (retorno == 2) {
                    console.log(retorno);
                    const TextoMsg = 'Usuário já cadastrado';
                    document.getElementById("TextoModal").innerHTML = TextoMsg;// "Cadastro realizado com sucesso!!!" +"\n"+"Deseja continuar cadastrando nessa nota ?"
                    $('#BTTnaoModal').hide();
                    document.getElementById("BTTsimModal").innerText = "OK"
                    toggleModal()
                    // alert("Erro: Campos não podem ficar em branco");
                }else if (retorno == 3) {
                
                    const TextoMsg = 'Campo com * não podem ficar em branco';
                    document.getElementById("TextoModal").innerHTML = TextoMsg;// "Cadastro realizado com sucesso!!!" +"\n"+"Deseja continuar cadastrando nessa nota ?"
                    $('#BTTnaoModal').hide();
                    document.getElementById("BTTsimModal").innerText = "OK"
                    toggleModal()
                    // alert("Erro: Desconhecido");
                }else {
                
                    console.log(retorno);
                    const TextoMsg = 'Erro Desconhecido' + ": " + retorno;
                    document.getElementById("TextoModal").innerHTML = TextoMsg;// "Cadastro realizado com sucesso!!!" +"\n"+"Deseja continuar cadastrando nessa nota ?"
                    $('#BTTnaoModal').hide();
                    document.getElementById("BTTsimModal").innerText = "OK"
                    toggleModal()
              
                }
                //by JJr 10/06/24
                //window.location.href = "../Cad_Prod/cad_nota_prod.php";            
            },
            error: function (a, b, c) {
                 alert (retorno);
                console.log(retorno);
                console.log('Erro: ' + a[status] + ' ' + c);
            }

        });
    }else if (pass == "" || confpass == ""){
        TextoMsg_G = "Campos em Branco!!";
         MSGaviso();
    }     else {
        TextoMsg_G = "Confirmação de senha diferente da senha digitada";
        MSGaviso()
    }
}

// function GeraLogin() {    
//     var nome = document.getElementById("nome").value;
//     var sobrenome = document.getElementById("sobrenome").value;
//     var CLICK_sobrenome = document.getElementById("sobrenome");
//     var Lsobre = sobrenome.substr(0, 2)
   
//     CLICK_sobrenome.change(function (event) {       
//         document.getElementById("login").value = nome + "@" + Lsobre + "." + "Xtech";            
//     });
// }


function MSGaviso() { 
    
    document.getElementById("TextoModal").innerHTML = TextoMsg_G;// "Cadastro realizado com sucesso!!!" +"\n"+"Deseja continuar cadastrando nessa nota ?"
    $('#BTTnaoModal').hide();
    document.getElementById("BTTsimModal").innerText = "OK"

    const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modalMSG");
const fade = document.querySelector("#fade");
    modal.classList = ("show");
    fade.classList = ("show");
    // toggleModal()
}
function MSGaviso_2() { 
    
    document.getElementById("TextoModal").innerHTML = TextoMsg_G;// "Cadastro realizado com sucesso!!!" +"\n"+"Deseja continuar cadastrando nessa nota ?"
    $('#BTTnaoModal').show();
    $('#BTTsimModal').hide();
    document.getElementById("BTTnaoModal").innerText = "OK"

    const closeModalButton = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalMSG");
    const fade = document.querySelector("#fade");
    modal.classList = ("show");
    fade.classList = ("show");
    // toggleModal()
}


function FechaModal() {
    const closeModalButton = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalMSG");
    const fade = document.querySelector("#fade");
    modal.classList = ("hide");
    fade.classList = ("hide");
    // toggleModal()    
}
function VoltaInicio() {
    const closeModalButton = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalMSG");
    const fade = document.querySelector("#fade");
    modal.classList = ("hide");
    fade.classList = ("hide");
    // window.location.href = '../Inicial/CarregaInicio.php';
    window.location.href = '../Login/login.php';
}
