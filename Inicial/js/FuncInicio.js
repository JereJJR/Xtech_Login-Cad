//  Troca background automatico

// const tempo = 1000

// setTimeout(() => {
//     document.body.style.backgroundImage = "url('../Imagens/background/sistema-operacional.jpg')"
// }, tempo);

// const tempo2 = 3000
// setTimeout(() => {
//     document.body.style.backgroundImage = "url('../Imagens/background/background_inicio2.jpg')"
// }, tempo2);

$.ajax({
    type: 'POST',
    url: 'SessionUser.php',
    data: {

    },

    success: (retorno) => {
        console.log(retorno);
        var dadosUser = retorno.split(";");
        var nivelUser = dadosUser[0];
        
        if (nivelUser != "adm" && nivelUser != "dev") {
            $("#BTTpage_Co_user").hide();
            $("#BTTpage_Ca_user").hide();
            $("#BTTpage_Ca_LojaSetor").hide();
            $("#areaDev").hide();

        } else {
            $("#BTTpage_Co_user").show();
            $("#BTTpage_Ca_user").show();
            $("#BTTpage_Ca_LojaSetor").show();
            $("#areaDev").show();
        }

        console.log(dadosUser[0])

    }
});



function DirConsul_patrimonio() {
    localStorage.setItem('LocalP', '0');
    window.location.href = '../Consulta/Consulta_Patrimonio/consu_patrimonio.php';
}