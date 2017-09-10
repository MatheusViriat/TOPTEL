






    <?php include("header.php") ?>
    <!-- Header -->
    <!-- <div class="logo_top"><img src="<?=$home?>/img/logo_top_tel.jpg"></div> -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Top-Tel</h1>
            <h3>Soluções em Eletricidade e Informática</h3>
            <br>
            <!-- <a href="#callout" class="btn btn-dark btn-lg page-scroll">Saiba mais!</a> -->
        </div>
    </header>

    <div><?php include("noticias.php"); ?></div>

    <?php include ("servicos.php") ?>

    <!-- About -->
    <!-- <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nosso objetivo é facilitar os processos de comunicação solucionando problemas e desenvolvendo idéias que facilitam o dia a dia e reduzem custos.</h2>
                    <p class="lead">Garantindo controle e segurança absoluta na transmissão de dados, fluência de voz e nitidez de imagem.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Callout -->
    <aside id="callout" class="callout">
        <div class="text-vertical-center">
            <h2>Site em construção.</h2>
            <h2>Estamos trabalhando para te proporcionar informações sobre os serviços da Top-Tel.</h2>
            <!-- <h2>Soluções baseadas nas necessidades de cada cliente, com garantia dos resultados e total acompanhamento técnico.</h2> -->
        </div>
    </aside>

    <?php include ("produtos.php") ?>

    <?php include ("clientes.php") ?>

    <!-- Call to Action -->
    <!-- <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Gostou dos nossos serviços? Faça um orçamento conosco, ou tire qualquer dúvida!</h3>
                    <a href="#" class="btn btn-lg btn-light">Clique aqui</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside> -->

    <!-- Map -->
    <!-- <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
    </section> -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Localização</strong>
                    </h4>
                    <p>Rua Piracicaba, 406 - Cep 08577-290
                        <br>Monte Belo - Itaquaquecetuba - SP</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>(11) 4640-4462 – (11) 3415-1793</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">toptelservicos@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Site criado em 2017</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

<?php wp_footer(); ?>