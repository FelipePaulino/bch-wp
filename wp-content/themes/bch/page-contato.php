


<?php 
/*
Template Name: Contato
*/

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<style type="text/css">
	.left{
    width: 30%;
    float: left;
	}
	.right{
    margin-left: 5%;
    width: 65%;
    margin-top: 35px;
	}
	.left .telefones{background: url(<?php echo get_template_directory_uri(); ?>/images/telefones.jpg);background-repeat:  no-repeat;width:  289px;height: 82px;color: #fff;text-align: right;font-weight:  700;font-family: arial;font-size: 22px;padding-right:  30px;padding-top: 9px;letter-spacing: 1px;margin-bottom: 50px;margin-top: 40px;}
	.box-funcionario{background: url(<?php echo get_template_directory_uri(); ?>/images/ponto.jpg);background-repeat:  no-repeat;background-position:  top left;padding-left: 35px;margin-left: 40px;margin-bottom: 35px;}
	.box-funcionario h5{font-weight: 700;font-size: 16px;margin-bottom: 3px;}
	.box-funcionario span{font-style:  italic;font-size: 16px;}
	.box-funcionario a{
		display: block;
		color: #e05a27;
		text-decoration:  underline;
		font-size: 16px;
	}
.form-contato .bloco{
	    background: #f9f9f9;
    padding: 10px;
}
.form-contato .bloco input, .form-contato .bloco textarea{
    width: 100%;
    height: 35px;
    padding: 0 10px;
    border: 1px solid #f4f4f4;
    color: #878686;
    font-family: arial;
    font-size: 13px;
}

 .form-contato .bloco textarea{
 	height: 95px;
 	max-height: 95px;
 	min-height: 95px;
 	padding: 10px;
 }
.form-contato input[type=submit] {
    border-radius: 20px;
    background: #e05a27;
    border: 0;
    color: #ffff;
    padding: 6px 22px;
    font-size: 20px;
    text-transform: uppercase;
    margin-top: 14px;
}
@media (max-width: 480px) {
.left{
	width: 100%;
}
.left .telefones {
    background: url(http://newqi.com.br/bch/wp-content/themes/bch/images/telefones.jpg);
    background-repeat: no-repeat;
    width: 289px;
    height: 82px;
    color: #fff;
    text-align: right;
    font-weight: 700;
    font-family: arial;
    font-size: 22px;
    padding-right: 30px;
    padding-top: 9px;
    letter-spacing: 1px;
    margin-bottom: 50px;
    margin-top: 40px;
    margin: 10px auto 40px;
}
.right {
    margin-left: 0;
    width: 100%;
    margin-top: 0;
}
}
</style>

<h1>Contato</h1>
</div>

<div class="container">
	<div class="left">
		<div class="telefones">
			Tel.: (11) 3392-1756<br>
			(11) 3392-2497
		</div>
		<div class="box-funcionario">
			<h5>Tânia Machado</h5>
			<span>Diretora Executiva</span>
			<a href="mailto:tmjobs@tmjobs.com.br">tmjobs@tmjobs.com.br</a>
		</div>
		<div class="box-funcionario">
			<h5>Bruna Almeida</h5>
			<span>Marketing BCH</span>
			<a href="mailto:marketing@tmjobs.com.br">marketing@tmjobs.com.br</a>
		</div>
                <div class="box-funcionario">
            <h5>Patricia Bueno</h5>
            <span><b>Tel:</b> 11 94824-3287</span>
        </div>
                <div class="box-funcionario">
            <h5>Gloria Kannebley</h5>
            <span><b>Tel:</b> 12 99190-5772</span>
        </div>
                <div class="box-funcionario">
            <h5>Daniela Calvo</h5>
            <span><b>Tel:</b> 11 99607-2263</span>
        </div>
	</div>
	<div class="right">
		    <div class="form-contato">
    <?php echo do_shortcode( '[contact-form-7 id="428" title="Formulário de contato"]' ); ?>
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