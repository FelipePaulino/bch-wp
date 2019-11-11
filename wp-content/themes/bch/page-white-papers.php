<?php 
/*
Template Name: White Papers
*/

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<style type="text/css">
.box-white-papers img{
    float: left;
    border: 1px solid #ccc;
    margin-right: 20px;
    min-width: 24%;
    width: 270px;
	}
.box-white-papers .textos{
	float: left;
	width: 63%;
}
.box-white-papers .textos h2{border:  0;text-align: left;margin-top: 0;font-weight: 700;line-height: 29px;padding-top: 5px;margin-bottom: 2px;}
.box-white-papers .textos p{font-size: 16px;
    float: left;
    margin-bottom: 54px;
    width: 100%;}
.box-white-papers .textos a {
    background: #e05a27;
    color: #fff;
    border-radius: 21px;
    padding: 11px 34px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 17px;
    float: left;
}

.box-white-papers{
		float: left;
		margin: 30px 0 0;
		border-bottom: 1px solid #000;
		padding-bottom: 30px;
}
@media (max-width: 480px) {
	.box-white-papers .textos{
		width: 100%;
	}
	.box-white-papers .textos h2{
		margin-top: 15px;
	}
	.box-white-papers .textos p {
	    font-size: 16px;
	    float: left;
	    margin-bottom: 30px;
	}
	.box-white-papers img {
    float: left;
    border: 1px solid #ccc;
    margin-right: 0;
    width: 100%;
}
}
</style>

<h1>White Papers</h1>
</div>

<div class="container">
		   <?php 
          $args = array( 'post_type' => 'white-papers-fu', 'posts_per_page' => 1 , 'paged' => get_query_var('paged') ? get_query_var('paged') : 1 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>
	<div class="box-white-papers">
		<img src="<?php the_field('imagem'); ?>">
		<div class="textos">
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('descrição'); ?></p>
			<a href="<?php the_field('arquivo'); ?>" class="baixar">Baixe Agora</a>
		</div>
	</div>
	<?php endwhile; ?>


</div>
           <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
  <?php $big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages
) );

wp_reset_postdata(); ?>
    <?php get_footer(''); ?>