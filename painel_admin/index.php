<!DOCTYPE php>
<php lang="pt-br">
    <!-- head da página -->
    <?php include_once('head.php'); ?>
<body>
    <!-- barra de navegação-->
    <?php include_once('navbar.php'); ?>

    <main>
        <div id="back">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="img1">
                        <img class="img-fluid" id="img12" src="../img/imgdent2.jpg">
                    </div>
                </div>
            </div>
        </div>
       
            <!--Sobre a empresa-->
            <div id="sobre-empresa">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title"> Sobre Dente Slim</h3>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="../img/imgdent3.jpg.jpg" alt="DenteSlim">

                        </div>

                        <div class="col-md-6">
                            <h3 class="titulo"> Uma cínica que pensa em você </h3>
                            <p> Estamos sempre buscando formas de lhe trazer benefícios</p>
                            <p>Trabalhamos com profissional qualificados para lhe garantir um sorriso bonito.</p>
                            <p> Veja outros diferenciais:</p>
                            <ul id="lista">
                                <li><i class="fas fa-check"></i> Temos as melhores tecnologias do mercado.</li>
                                <li><i class="fas fa-check"></i> Estamos a 20 anos no mercado ortôdontico.></li>
                                <li><i class="fas fa-check"></i> Temos convênio com os principais planos de saúde.</li>
                                <li><i class="fas fa-check"></i> Garantia de um sorriso perfeito.</li>

                            </ul>
                        </div>



                    </div>

                </div>

            </div>

    </main>


    <footer>
        <div id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 caixacontato">
                        <i class="fas fa-phone"></i>
                        <p><span class="titulo-contato">Ligue para:</span>9 9999-9999</p>
                        <p><span class="titulo-contato">Horários</span> 08:00 - 19:00</p>
                    </div>
                    <div class="col-md-4 caixacontato">
                        <i class="fas fa-envelope"></i>
                        <p><span class="titulo-contato">Envie um email: </span>contato@denteslim.com.br</p>
                    </div>
                    <div class="col-md-4 caixacontato">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="titulo-contato"> Venha nos visitar:</span> Rua Tchurusbango - 8080</p>
                    </div>
                </div> 





    </footer>
    <!--Script do projeto-->
    <script src="js/script.js"></script>
</body>

</php>