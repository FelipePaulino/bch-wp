 	<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<link href="<?php echo get_template_directory_uri(); ?>/includes/css/blog.css" rel="stylesheet" type="text/css" />

<h1>Blog</h1>
</div>
<div class="materias container">
		<div class="box-blog interna-blog">
			<div class="data">
				<?php
				$ano = get_the_time( 'Y' );
				$mes = get_the_time( 'm' );
				$mes_nome = get_the_time( 'F' );
				$dia = get_the_time( 'd' );
				echo'<span>' . $mes_nome  . '</span>' ;
				echo'<span>' . $ano .'</span>' ;
				echo'<span>' .  $dia .'</span>' ; ?>
			</div>
			<div class="imagem-blog"><?php the_post_thumbnail('imagem-blog'); ?></div>
			<div class="textos">
				<h2><?php the_title(); ?></h2>
				<p><span>By <b><?php the_author() ?></b></span></p>
				<div class="texto""><?php the_content(); ?></div>
				<p class="compartilhe">compartilhe</p>
				<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=2015186158735487&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://newqi.com.br/bch/single.php" data-width="710" data-numposts="5"></div>
			</div>
		</div>

</div>
           <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
    <?php get_footer(''); ?>