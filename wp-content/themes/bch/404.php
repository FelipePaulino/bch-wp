<?php 

/*
Template Name: 404
*/

get_header(); 

?>
<style type="text/css">
a.quem-somos{
		padding-top: 20px;
		border-top: 4px #fff solid;
}
.menu-fixed a.quem-somos{
	padding-top: 20px;
	border-top: 4px #203372 solid;
	color: #203372;
}
.conteudo{
 	height: 920px;
}
.conteudo div {
    width: 47%;
}
</style>
	<div class="banner banner-precisa-de-ajuda-para-economizar-celular">
				<div class="container">

					<h2>Precisa de ajuda para <span>ECONOMIZAR?</span></h2>
					<p>Com 26 anos de experiência em hidráulica, o Grupo Mais Economia criou uma tecnologia avançada para reduzir a conta de água em até 40%.</p>
					<a href="#" class="abrir-modal">Contato</a>
				</div>
			</div>

		<div class="carrosel">
			<div>

				<div class="banner banner-precisa-de-ajuda-para-economizar">
					<div class="container">
<center>
						<h2><span>Ops, Erro 404 !</span>
						<br>Página não encontrada</h2>
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="abrir-modal"><b>Retornar para a Home</b></a>
						</center>

					</div>
				</div>
			</div>

		</div>

		<div class="container">
			

		</div>

		<br class="quebra">

	<?php get_footer(); ?>
	<script type="text/javascript">
$(function(){
	var x = $(window).width()
	var y = $(window).height()
	if(x < 480){
		$('.conteudo').css({'height': y - 1550 , 'margin-bottom': '20'})
		$('.conteudo div').css({'width': '100%'})
	}
})
</script>