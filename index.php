<?php
include("header.php");
include("carousel.php"); ?>

    <p class="info_before">Redução de custos em comunicações sem perda de produtividade, adequadas para os diversos segmentos (Comércios, Indústrias, Escritórios em geral, Consultórios Médicos, Residências, Escolas, Centro logístico, Distribuidores e Setores Públicos.)</p>

    <hr>

    <div><?php include("noticias.php"); ?></div>

    <?php
    // include("servicos.php");
    include("about.php");
    //include ("produtos.php");
    //include ("clientes.php"); ?>

    <!-- Call to Action -->
<!--     <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Gostou dos nossos serviços? Faça um orçamento conosco, ou tire qualquer dúvida!</h3>
                    <a href="#" class="btn btn-lg btn-light">Clique aqui</a>
                </div>
            </div>
        </div>
    </aside> -->

    <!-- Map -->
<!--     <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
    </section> -->

    <!-- Footer -->

    <?php include("footer.php") ?>

<?php wp_footer(); ?>
