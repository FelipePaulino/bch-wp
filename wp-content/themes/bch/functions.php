

<?php


add_theme_support( 'post-thumbnails' );


add_image_size( 'imagem-blog', 433, 255, true ); // imagem para página de post</code>


   function create_posttype() {

      register_post_type( 'informacoes',
    array(
      'labels' => array(
        'name' => __( 'Informações BCH' ),
        'singular_name' => __( 'Products' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'informacoes'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
  register_post_type( 'banner-topo',
    array(
      'labels' => array(
        'name' => __( 'Banner Topo' ),
        'singular_name' => __( 'Products' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'banner-topo'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );

  register_post_type( 'encontro-ceos',
    array(
      'labels' => array(
        'name' => __( 'Encontro Ceos' ),
        'singular_name' => __( 'Products' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-ceos'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
  register_post_type( 'bch-latam',
    array(
      'labels' => array(
        'name' => __( 'América Latina' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'bch-latam'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
      register_post_type( 'encontro-hotelaria',
    array(
      'labels' => array(
        'name' => __( 'Encontro Hotelaria' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-hotelaria'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
        register_post_type( 'encontro-engenharia',
    array(
      'labels' => array(
        'name' => __( 'Encontro Engenharia Clínica' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-engenharia'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
          register_post_type( 'encontro-oss',
    array(
      'labels' => array(
        'name' => __( 'Encontro Oss' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-oss'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
            register_post_type( 'encontro-cmos',
    array(
      'labels' => array(
        'name' => __( 'Encontro Cmos' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-cmos'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
              register_post_type( 'encontro-farma',
    array(
      'labels' => array(
        'name' => __( 'Encontro Farmacêuticos' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-farma'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
                register_post_type( 'encontro-cios',
    array(
      'labels' => array(
        'name' => __( 'Encontro Cios' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-cios'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
                  register_post_type( 'encontro-rh',
    array(
      'labels' => array(
        'name' => __( 'Encontro RH' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'encontro-rh'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
  register_post_type( 'solucoes-fu',
    array(
      'labels' => array(
        'name' => __( 'Soluções' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'solucoes-fu'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
   register_post_type( 'white-papers-fu',
    array(
      'labels' => array(
        'name' => __( 'White Papers' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'white-papers-fu'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
    register_post_type( 'videos-fu',
    array(
      'labels' => array(
        'name' => __( 'Videos' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'videos-fu'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
        register_post_type( 'parceiros',
    array(
      'labels' => array(
        'name' => __( 'Parceiros' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'parceiros'),
'supports' => array('title','editor','thumbnail','comments', 'excerpt','text_list',),

    )
  );
}
add_action( 'init', 'create_posttype' );



?>