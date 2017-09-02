<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'http://pox.globo.com/rss/g1/tecnologia/' );

$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 5 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;

$rss_uol = fetch_feed( 'http://tecnologia.uol.com.br/ultnot/index.xml' );

$maxitems = 0;

if ( ! is_wp_error( $rss_uol ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss_uol->get_item_quantity( 5 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items_uol = $rss_uol->get_items( 0, $maxitems );

endif;

$rss_olhar_digital = fetch_feed( 'https://olhardigital.com.br/rss' );

$maxitems = 0;

if ( ! is_wp_error( $rss_olhar_digital ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss_olhar_digital->get_item_quantity( 5 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items_olhar_digital = $rss_olhar_digital->get_items( 0, $maxitems );

endif;

?>

<section id="noticias">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Notícias recentes sobre Tecnologia:</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <div class="img_logo">
                            	<img src="<?=get_template_directory_uri()?>/img/G1_logo.svg_.png">
                        	</div>
                            <h4>
                                <!-- <strong>G1</strong> -->
                            </h4>

                            <?php foreach ( $rss_items as $item ) : ?>
                            <a class="noticias_link" target="_blank" href="<?php echo esc_url( $item->get_permalink() ); ?>" title="<?php printf( __( 'Postado %s'), $item->get_date('j F Y | g:i a') ); ?>">
                            <!-- <i class="dashicons dashicons-arrow-right-alt2"></i> -->
			                    <p>
			                    	<?php echo esc_html( $item->get_title() ); ?>
			                	</p>
			                </a>
			                <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <div class="img_logo">
                            	<img class="img_logo_uol" src="<?=get_template_directory_uri()?>/img/uol.png">
                        	</div>
                            <?php foreach ( $rss_items_uol as $item ) : ?>
                            <a class="noticias_link" target="_blank" href="<?php echo esc_url( $item->get_permalink() ); ?>" title="<?php printf( __( 'Postado %s'), $item->get_date('j F Y | g:i a') ); ?>">
			                    <p>
			                    	<?php echo esc_html( $item->get_title() ); ?>
			                	</p>
			                </a>
			                <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <div class="img_logo">
                            	<img class="olhardigital_logo" src="<?=get_template_directory_uri()?>/img/olhar_digital.jpg">
                        	</div>
                            <?php foreach ( $rss_items_olhar_digital as $item ) : ?>
                            <a class="noticias_link" target="_blank" href="<?php echo esc_url( $item->get_permalink() ); ?>" title="<?php printf( __( 'Posted %s'), $item->get_date('j F Y | g:i a') ); ?>">
			                    <p>
			                    	<?php echo esc_html( $item->get_title() ); ?>
			                	</p>
			                </a>
			                <?php endforeach; ?>
                        </div>
                    </div>                          
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>