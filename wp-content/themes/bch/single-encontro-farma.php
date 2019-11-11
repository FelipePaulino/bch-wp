<?php get_header(); ?>

<link href="<?php echo get_template_directory_uri(); ?>/includes/css/interna-fotos.css" rel="stylesheet" type="text/css" />

<h1>Encontro Farmacêuticos</h1>
</div>

<div class="box-carrosel-encontros">
	<div class="container">
		<div class="carrosel-encontros">
			<?php 
	          $args = array( 'post_type' => 'encontro-farma', 'posts_per_page' => 100 );
	          $loop = new WP_Query( $args );
	          while ( $loop->have_posts() ) : $loop->the_post();
	        ?>
			<div class="box-encontro">
				<
				<a href="<?php the_permalink() ?>">
					<div class="contorno"></div>
				<div><img src="<?php the_field('imagem_principal'); ?>"></div>
				<h3><?php the_title(); ?></h3>
				</a>

			</div>	



				<?php endwhile; ?>
		</div>
	</div>
</div>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<div class="ca">
			<div class="slider slider-for">

<?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('galeria_de_fotos', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 476, 356); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>

        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
          <div>  <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"></div>
        <?php if( !empty($url) ){ ?></a><?php } ?>

<?php endforeach; endif; ?>

	
	
			</div>
		</div>

	</div>
		<div class="back-thumbs">
			<div class="container">
			<div class="slider slider-nav">

<?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('galeria_de_fotos', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 476, 356); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>

        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
          <div>  <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"></div>
        <?php if( !empty($url) ){ ?></a><?php } ?>

<?php endforeach; endif; ?>

			</div>
		</div>
		</div>
   <?php endwhile; else: ?>

   <p>Sorry, no posts matched your criteria.</p>

   <?php endif; ?>
	<?php get_footer(); ?>
