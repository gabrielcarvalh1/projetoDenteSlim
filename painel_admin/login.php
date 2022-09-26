<!DOCTYPE php>
<php lang="pt-br">
  <!-- head da página -->
  <?php include_once('head.php'); ?>
<body>
      <!--Barra Nav -->
    <!--Barra Nav -->
    <?php include_once('navbar.php'); ?>
    <main>
  <div id="formulario-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="meu-form">
                    <h1> Login</h1>
                    <form action="">
                        <input type="hidden" name="id_medico">
                        <input type="hidden" name="inscrever">
                        <fieldset>
                            <legend>Preencha com úsuario e senha</legend>
                            <div class="label">Usuario<input type="email" name="email_login" id="email_login"></div>
                            <div class="label">Digite sua senha<input type="password" name="senha_login" id="senha_login"></div>
                            
                        </fieldset>
                        <button class="main-btn "id="submit">Login</button>
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