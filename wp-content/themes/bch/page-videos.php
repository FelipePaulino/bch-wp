<?php 
/*
Template Name: Videos
*/

get_header(); ?>

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

<h1>Videos</h1>
</div>

<div class="container">
	     <?php 
          $args = array( 'post_type' => 'videos-fu', 'posts_per_page' => 100 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>
	<iframe width="515" height="288" src="https://www.youtube.com/embed/<?php the_field('id_do_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php endwhile; ?>
</div>

<?php include('footer.php') ?>