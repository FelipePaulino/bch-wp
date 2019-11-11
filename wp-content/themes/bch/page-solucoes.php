<?php 
/*
Template Name: Soluções
*/

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<style type="text/css">
	
	iframe{
		float: left;
		margin: 30px 28px;
	}
	@media (max-width: 480px) {
	iframe {
	    margin: 10px 0 20px;
	    width: 100%;
	    height: 196px;
	}
	}
</style>

<h1>Soluções</h1>
</div>

<div class="container">
	     <?php 
          $args = array( 'post_type' => 'solucoes-fu', 'posts_per_page' => 100 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>
	<iframe width="515" height="288" src="https://www.youtube.com/embed/<?php the_field('id_do_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php endwhile; ?>
</div>
           <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
    <?php get_footer(''); ?>