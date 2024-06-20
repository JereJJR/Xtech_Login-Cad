<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleCad.css">
    <link rel="stylesheet" href="css/modal.css" />
    <title>Cadastro de usuário</title>


</head>

<body>
    <div id="fade" class="hide"></div>
    <div id="modalMSG" class="hide">
        <div class="modal-header">
            <h3>Alerta!!!</h3>
            <button class="btn-close" id="close-modal" onclick="FechaModal()"></button>
        </div>
        <div class="modal-body" id="TextoModal">
            <p>Aqui vai o texto do modal</p>
            <p>Porém já estou passando lá do js</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="BTTsimModal" onclick="FechaModal()">Sim</button>
            <button type="button" class="btn btn-danger" id="BTTnaoModal" data-dismiss="modal" onclick="VoltaInicio()">Não</button>
        </div>
    </div>
    
    <div class="box">
        <div class="img-box">
            <img src="../Imagens/background/img-formulario.png">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Voltar para a home? <a href="../Inicial/CarregaInicio.php"> Home </a><img src="../Imagens/icones/home.png" alt=""> </p>
            <form action="#">
                <div class="input-group">
                    <label for="nome">*Primeiro Nome</label>
                    <input type="text" id="nome" placeholder="Digite o seu primeiro nome" required>
                </div>
                <div class="input-group">
                    <label for="nome">*Sobrenome</label>
                    <!-- <input type="text" id="sobrenome" placeholder="Digite o seu sobrenome" onclick="GeraLogin()" required> -->
                    <input type="text" id="sobrenome" placeholder="Digite o seu sobrenome" required>
                </div>

                <div class="input-group">
                    <label for="email">*E-mail</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>           

             
                <div class="input-group">
                    <label for="Login">*Acesso</label>
                    <input type="text" id="login" required>
                </div>
                <div class="input-group w50">
                    <label for="senha">*Senha</label>
                    <input type="text" id="pass" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="confSenha" placeholder="Confirme a senha" required>
                </div>

                <input type="checkbox" onclick="showPass()" placeholder="Exibir Senha">
                <label for="ckbox" class="font-weight-bold">
                    <span>Exibir Senha</span>
                </label>

                <div class="input-group">
                    <button id="bttCadastra" onclick="BTTcad()">Cadastrar</button>
                </div>


            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/cad_user.js"></script>
</html>