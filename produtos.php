<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Trabalhamos com os produtos</h2>
                <hr class="small">
                <div class="row">
                    <?php 

                        $args = array( 'post_type' => 'produto', 'posts_per_page' => 30 );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ):
                            while ( $loop->have_posts() ):
                                $loop->the_post();
                    ?>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <?php the_post_thumbnail( array(200, 80) ); ?>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                    <?php 
                            endwhile;
                        endif;
                    ?>

                </div>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="services bg-primary"></section>