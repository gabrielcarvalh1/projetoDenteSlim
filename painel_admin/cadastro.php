<!DOCTYPE php>
<php lang="pt-br">
  <!-- head da página -->
  <?php include_once('head.php'); ?>
<body>
   <!--Barra Nav -->
 <?php include_once('navbar.php'); ?>
<div id="formulario-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="meu-form">
                    <h1> Cadastro de clientes</h1>
                    <form action="">
                        <input type="hidden" name="id_medico">
                        <input type="hidden" name="inscrever">
                        <fieldset>
                            <legend>Preencha com seus dados</legend>
                            <div class="label">Nome <input type="text" name="nomeuser" id="nomeuser"></div>
                            <div class="label">CPF  <input type="text" name="cpfuser" id="cpfuser"></div>
                            <div class="label">E-mail <input type="text" name="emailuser" id="emailuser"></div>
                            <legend> Crie uma senha</legend>
                            <div class="label">Digite sua senha<input type="password" name="senha1user" id="senha1user"></div>
                            <div class="label">Digite novamente<input type="password" name="senha2user" id="senha2user"></div>
                        </fieldset>
                        <button class="main-btn "id="submit">Criar o cadastro</button>
                        <button class="main-btn" id="limpar">Limpar formulário</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </main>

       
        <!--Script do projeto-->
     <script src="js/script.js"></script> 
</body>
</php>