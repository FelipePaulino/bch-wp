
	<div class="rodape">
		<div class="container">
			<div class="menu-footer">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>solucoes">Soluções</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>white-papers">White Papers</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>videos">Videos</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contato">Contato</a>
			</div>
			<div class="informacoes-rodape">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tania.png" class="tania">
				  <?php $nova_consulta = new WP_Query( array( 'post_type' => 'informacoes', 'posts_per_page' => 1 ) ); ?>
				    <?php while ( $nova_consulta->have_posts() ) : $nova_consulta->the_post(); ?>
				<div>
					<h4>Missão</h4>
					<p><?php the_field('texto_missao'); ?></p>
				</div>
				<div>
					<h4>Visão</h4>
					<p><?php the_field('texto_visao'); ?></p>
				</div>
				<div>
					<h4>Valores</h4>
					<p><?php the_field('texto_valores'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="redes-footer">
				<a href="<?php the_field('link_do_facebook'); ?>" target="_blank"><div><i class="fab fa-facebook-f"></i></div></a>
				<a href="<?php the_field('link_do_instagram'); ?>" target="_blank"><div><i class="fab fa-instagram"></i></div></a>
				<a href="<?php the_field('link_do_twitter'); ?>" target="_blank"><div><i class="fab fa-twitter"></i></div></a>
			</div>
			<p class="assinatura">Business Club Healthcare © 2018 - Todos os direitos reservados</p>
		</div>
	</div>





	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/js/efeitos.js"></script>

</body>
</html>