<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
     <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    <title><?php wp_title(''); ?></title>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    <meta charset="utf-8">
	<link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Tema opcional -->
	<link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="<?php echo get_template_directory_uri(); ?>/includes/css/geral.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css"   href="<?php echo get_template_directory_uri(); ?>/includes/slick/slick.css"/>
	<link rel="stylesheet" type="text/css"   href="<?php echo get_template_directory_uri(); ?>/includes/css/hamburgers.css"/>
  <style>
    code {
      display: inline-block;
    }

    code,
    .hamburger {
      vertical-align: middle;
    }
  </style>
  		  <script>
  /**
   * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
   *
   * @private
   * @author Todd Motto
   * @link https://github.com/toddmotto/foreach
   * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
   * @callback requestCallback      callback   - Callback function for each iteration.
   * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
   * @returns {}
   */
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
  </script>
</head>
<body>
	<div class="container">
		<div class="topo">
			<div class="linha">
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="logo"></a>

			<div class="redes">
				<a href="<?php the_field('link_do_facebook'); ?>" target="_blank"><div><i class="fab fa-facebook-f"></i></div></a>
				<a href="<?php the_field('link_do_instagram'); ?>" target="_blank"><div><i class="fab fa-instagram"></i></div></a>
				<a href="<?php the_field('link_do_twitter'); ?>" target="_blank"><div><i class="fab fa-twitter"></i></div></a>
			</div>
		</div>
<div class="hamburger hamburger--3dxy-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>

		<div class="menu">
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></div>
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></div>
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>solucoes">Soluções</a></div>
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>white-papers">White Papers</a></div>
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>videos">Videos</a></div>
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>contato">Contato</a></div>
			<div class="borda"></div>
		</div>
	

    <div class="container pai-banner">
  <div class="banner-topo">
              <?php $nova_consulta = new WP_Query( array( 'post_type' => 'banner-topo', 'posts_per_page' => 100 ) ); ?>
      <?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
      <a href="<?php the_field('link_do_banner'); ?>" target="_blank"><img src="<?php the_field('banner_topo'); ?>"></a>
            <?php endwhile; ?>
    </div>
  </div>
