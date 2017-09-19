<!DOCTYPE html>
<html lang="en">

	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="robots" content="index, follow">

			<meta property="og:site_name" content="Top-Tel - Soluções Inteligentes">
			<meta property="og:type" content="website">

	    <?php wp_head(); ?>

	    <title>Top-Tel - Soluções Inteligentes</title>
			<meta name="description" content="Serviços inteligentes e de qualidade, envolvendo Redes, Hardware, Cabeamento estruturado, PABX Digital, IP, Interfonia digital e coletiva, Circuito fechado de TV e Alarmes. Temos também notícias sobre tecnologia." />

	    <?php $home = get_template_directory_uri();?>

	    <!-- Bootstrap Core CSS -->
	    <link href="<?=$home?>/css/bootstrap.css" rel="stylesheet">
	    <link href="<?=$home?>/css/carousel.css" rel="stylesheet">
	    <link href="<?=$home?>/css/stylish-portfolio.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="<?=$home?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    	<!-- jQuery -->
	    <script src="<?=$home?>/js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?=$home?>/js/ie10-viewport-bug-workaround.js"></script>
	    <script src="<?=$home?>/js/popper.min.js"></script>
	    <script src="<?=$home?>/js/holder.min.js"></script>
	    <script src="<?=$home?>/js/bootstrap.min.js"></script>

	    <!-- <script src="<?=$home?>/js/jquery-3.2.1.slim.min.js"></script> -->

		    <!-- Custom Theme JavaScript -->
		<script>
		// Closes the sidebar menu
		$("#menu-close").click(function(e) {
		    e.preventDefault();
		    $("#sidebar-wrapper").toggleClass("active");
		});
		// Opens the sidebar menu
		$("#menu-toggle").click(function(e) {
		    e.preventDefault();
		    $("#sidebar-wrapper").toggleClass("active");
		});
		// Scrolls to the selected menu item on the page
		$(function() {
		    $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
		        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
		            var target = $(this.hash);
		            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		            if (target.length) {
		                $('html,body').animate({
		                    scrollTop: target.offset().top
		                }, 1000);
		                return false;
		            }
		        }
		    });
		});
		//#to-top button appears after scrolling
		var fixed = false;
		$(document).scroll(function() {
		    if ($(this).scrollTop() > 250) {
		        if (!fixed) {
		            fixed = true;
		            // $('#to-top').css({position:'fixed', display:'block'});
		            $('#to-top').show("slow", function() {
		                $('#to-top').css({
		                    position: 'fixed',
		                    display: 'block'
		                });
		            });
		        }
		    } else {
		        if (fixed) {
		            fixed = false;
		            $('#to-top').hide("slow", function() {
		                $('#to-top').css({
		                    display: 'none'
		                });
		            });
		        }
		    }
		});
		// Disable Google Maps scrolling
		// See http://stackoverflow.com/a/25904582/1607849
		// Disable scroll zooming and bind back the click event
		var onMapMouseleaveHandler = function(event) {
		    var that = $(this);
		    that.on('click', onMapClickHandler);
		    that.off('mouseleave', onMapMouseleaveHandler);
		    that.find('iframe').css("pointer-events", "none");
		}
		var onMapClickHandler = function(event) {
		        var that = $(this);
		        // Disable the click handler until the user leaves the map area
		        that.off('click', onMapClickHandler);
		        // Enable scrolling zoom
		        that.find('iframe').css("pointer-events", "auto");
		        // Handle the mouse leave event
		        that.on('mouseleave', onMapMouseleaveHandler);
		    }
		    // Enable map zooming with mouse scroll when the user clicks the map
		$('.map').on('click', onMapClickHandler);
		</script>

	    <!-- Plugin CSS -->
	    <!-- <link href="<?=$home?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> -->

	    <!-- Theme CSS -->
	    <!-- <link href="<?=$home?>/css/creative.css" rel="stylesheet"> -->

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>

	<div class="div_logo">
	    <div class="logo_home">
	        <img src="<?=$home?>/img/logo_top_tel.png">
	        <!-- <div class="menu_home">
	            <a href="">Início</a>
	            <a href="">Serviços</a>
	            <a href="">Produtos</a>
	            <a href="">Fale Conosco</a>
	        </div> -->
	    </div>
	</div>

	<p class="sombra_div_logo">Há mais de 20 anos oferecemos soluções que facilitam e agilizam proporcionando bem estar e segurança com a melhor relação custo/benefício.</p>

<body>
