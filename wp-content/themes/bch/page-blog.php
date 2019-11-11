
<?php 
/*
Template Name: Blog
*/

get_header(); ?>

<link href="<?php echo get_template_directory_uri(); ?>/includes/css/blog.css" rel="stylesheet" type="text/css" />

<h1>Blog</h1>
</div>
<div class="materias container">
	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
		<div class="box-blog">
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
			<a href="<?php the_permalink() ?>">
				<div class="imagem-blog"><?php the_post_thumbnail('imagem-blog'); ?></div></a>
			<div class="textos">
				<h2><?php the_title(); ?> </h2>
				<p><span>By <b><?php the_author() ?></b></span>
					<span>								
						<?php
						$categories = get_the_category( $post_ID );
						foreach ( $categories as $category ) {
						echo '<span class="laranja"' . get_category_link( $category->term_id ) . '"> ' . $category->name . '</span>';
						}
						?>
	
</span> <span><?php comments_popup_link('0', '1', '%',''); ?>Comentários</span></p>
				<div class="texto"><?php the_excerpt(); ?></div>
			</div>
		</div>
			<?php endwhile; ?>
		
</div>

    <?php get_footer(''); ?>