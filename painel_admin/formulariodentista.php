<!DOCTYPE php>
<php lang="pt-br">
  <!-- head da página -->
  <?php include_once('head.php'); ?>
<body>
      <!--Barra Nav -->
      <?php include_once('navbar.php'); ?>
    <main>
  <div id="formulario-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="meu-form">
                    <h1> Cadastro de dentistas</h1>
                    <form action="">
                        <input type="hidden" name="id_medico">
                        <input type="hidden" name="inscrever">
                        <fieldset>
                            <legend>Preencha com seus dados</legend>
                            <div class="label">Nome <input type="text" name="nomedent" id="nomedent"></div>
                            <div class="label">CPF  <input type="text" name="cpfdent" id="cpfdent"></div>
                            <div class="label">Cro    <input type="text" name="cro" id="cro"></div>
                            <div class="label">E-mail <input type="text" name="emaildent" id="emaildent"></div>
                            <legend> Crie uma senha</legend>
                            <div class="label">Digite sua senha<input type="password" name="senha1dent" id="senha1dent"></div>
                            <div class="label">Digite novamente<input type="password" name="senha2dent" id="senha2dent"></div>
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