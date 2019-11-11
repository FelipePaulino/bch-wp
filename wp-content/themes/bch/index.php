<?php
/*
Template Name: Home
*/
get_header(''); 

?>


		<div class="categorias" >
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-ceos', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">
				<img src="<?php the_field('imagem_principal'); ?>">
				<a href="<?php the_permalink() ?>" class="titulo">Encontro Ceos</a>

				<div class="escondida">

					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>

			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'bch-latam', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">
				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">América Latina</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
						
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-hotelaria', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
				<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro Hotelaria</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-engenharia', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro Engenharia Clínica</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-oss', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro Oss</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-cmos', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro CMOs</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-farma', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro FARMACÊUTICOS</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-cios', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
		<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro Cios</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
						<?php $nova_consulta = new WP_Query( array( 'post_type' => 'encontro-rh', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
		<div class="bloco-categoria">

				<img src="<?php the_field('imagem_principal'); ?>">
					<a href="<?php the_permalink() ?>" class="titulo">Encontro RH</a>
				<div class="escondida">
					<a href="<?php the_permalink() ?>" class="fundo"></a>
					<div class="textos">
					<!-- 	<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a> -->
						<div class="redes-es">
 							<a href="http://www.facebook.com/share.php?u=http://newqi.com.br/bch/&t=BCHWEB" target="_blank" class="facebook-icon"></a> 
							<a href="http://twitter.com/share?text=BCHWEB&url=<?php the_permalink() ?>&t=BCHWEB&<?php the_permalink() ?>&t=BCHWEB=URL&via=bch-web" 
target="_blank"  class="twitter-share-button"></a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<!-- <div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
			<div class="bloco-categoria">
				<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-evento.jpg">
					<a href="<?php the_permalink() ?>" class="titulo">Bch Latam</h3>
			</div>
		</div> -->
		<div class="blog col-md-6">
			<h2>Blog</h2>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
			<div class="box-blog">
				<div class="imagem-blog-home"><?php the_post_thumbnail('imagem-blog'); ?></div>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink() ?>">Leia Mais</a>
			</div>
			<?php endwhile; ?>
		</div>

		<div class="right col-md-6">
			<?php if ( have_posts() ): ?> 
    		<?php while ( have_posts() ) : the_post(); ?>
			<div class="banner-lateral">
				<a href="<?php the_field('link_banner_lateral'); ?>" target="_blank"><img src="<?php the_field('banner_lateral'); ?>"></a>

			</div>
		  	<?php endwhile; ?>
			<?php endif; ?>	
				<div class="whites-home">
				<h2>White Papers</h2>

			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'white-papers-fu', 'posts_per_page' => 2 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
		
				<a href="white-papers"><div class="box-white">
					<img src="<?php the_field('imagem'); ?>">

					<p><?php the_title(); ?></p>
				</div></a>
			<?php endwhile; ?>

			</div>
			<div class="videos-home">
				<h2>Vídeos</h2>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'videos-fu', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
				<iframe width="516" height="285" src="https://www.youtube.com/embed/<?php the_field('id_do_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<?php endwhile; ?>

			</div>
			<div class="solucoes-home">
				<h2>Soluções</h2>
			<?php $nova_consulta = new WP_Query( array( 'post_type' => 'solucoes-fu', 'posts_per_page' => 1 ) ); ?>
			<?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
				<iframe width="516" height="285" src="https://www.youtube.com/embed/<?php the_field('id_do_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php if ( have_posts() ): ?> 
<?php while ( have_posts() ) : the_post(); ?>
	<div class="sobre">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/images/img-sobre.jpg" class="img-sobre">
			<div class="textos">
				<img src="<?php echo get_template_directory_uri(); ?>/images/marcacao.jpg" class="marc">
				<h2>SOBRE O BCH</h2>
				<p><?php the_field('texto_sobre_o_bch'); ?></p>
				<?php endwhile; ?>
<?php endif; ?>	
<?php $nova_consulta = new WP_Query( array( 'post_type' => 'informacoes', 'posts_per_page' => 1 ) ); ?>
				    <?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
				<div class="col-md-4">
					<h3>MISSÃO</h3>
					<p><?php the_field('texto_missao'); ?> </p>
				</div>
				<div class="col-md-4">
					<h3>Visão</h3>
					<p><?php the_field('texto_visao'); ?></p>
				</div>
				<div class="col-md-4">
					<h3>Valores</h3>
					<p><?php the_field('texto_valores'); ?></p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/marcacao.jpg" class="marc">
			</div>
		</div>
	</div>
<?php endwhile; ?>
		<div class="parceiros">
	<div class="container">
	
			<h2>Parceiros</h2>
			<div class="carrosel-parceiros">
							<?php 
	          $args = array( 'post_type' => 'parceiros', 'posts_per_page' => 100 );
	          $loop = new WP_Query( $args );
	          while ( $loop->have_posts() ) : $loop->the_post();
	        ?>
				<a href="<?php the_field('link_parceiro'); ?>" target="_blank"><div class="marca"><img src="<?php the_field('logo_do_parceiro'); ?>"></div></a>
			<?php endwhile; ?>
			</div>
		</div>
	</div>

    <?php get_footer(''); ?>