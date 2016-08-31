<!doctype html>
<html class="no-js" <?php language_attributes(); ?> > <!-- lang="en"  -->
<head>

   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>
   <!-- <link rel="stylesheet" href="css/app.css"> -->
   <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

   <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>




   <?php
   if(have_posts()):
      while(have_posts()):
         the_post();

         $name = get_bloginfo('name');

         $twitter_user = '@offlimitsmx';

         if( is_single() ) {
            $name = $name . ': ' . get_the_title();
            $description = apply_filters( 'the_excerpt', get_the_excerpt() );
            $url = get_the_permalink( get_the_ID() );
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);

         } else {
            $name = $name . ': ' . get_the_title();

            $description = get_bloginfo('description');
            // $url = get_bloginfo('url');
            $url = get_the_permalink( get_the_ID() );

            $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_title("Inicio")->ID), 'thumbnail_size' );
         }


      endwhile;
   endif;

   $image = $thumb_url[0];


   $date = '';
   $time = '';


   global $mostrar_avisos;

   $mostrar_avisos = true;

   if( is_page("Festival") || is_page("Bandas") || is_page("Información") || $post->post_parent == get_page_by_title("Festival") )
      $mostrar_avisos = false;


   ?>

   <title><?php echo $name; ?></title>


   <?php //include_once 'favicons.php'; ?>


   <meta name="description" content="<?php echo $description; ?>" />

   <!-- Schema.org markup for Google+ -->
   <meta itemprop="name" content="<?php echo $name; ?>">
   <meta itemprop="description" content="<?php echo $description; ?>">
   <meta itemprop="image" content="<?php echo $image; ?>">

   <!-- Twitter Card data -->
   <meta name="twitter:card" content="<?php echo $image; ?>">
   <meta name="twitter:site" content="<?php echo $twitter_user; ?>">
   <meta name="twitter:title" content="<?php echo $name; ?>">
   <meta name="twitter:description" content="<?php echo $description; ?>">
   <!-- <meta name="twitter:creator" content="@author_handle"> -->
   <!-- Twitter summary card with large image must be at least 280x150px -->
   <meta name="twitter:image:src" content="<?php echo $image; ?>">

   <!-- Open Graph data -->
   <meta property="og:title" content="<?php echo $name; ?>"/>
   <meta property="og:type" content="article" />
   <meta property="og:url" content="<?php echo $url; ?>" />
   <meta property="og:image" content="<?php echo $image; ?>" />
   <meta property="og:description" content="<?php echo $description; ?>" />
   <meta property="og:site_name" content="<?php echo $name; ?>" />
   <meta property="article:published_time" content="<?php echo $date; ?>" />
   <meta property="article:modified_time" content="<?php echo $time; ?>" />
   <!-- <meta property="article:section" content="Artget_numberic ID" /> -->

   <?php
   wp_head();
   ?>

   <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-76176145-1', 'auto');
   ga('send', 'pageview');

   </script>


</head>

<body>


   <?php if( ! is_page("Checkout") && ! is_page("Pago") && ! is_page("Cart") ) : ?>
   <div id="avisos-destacados" class="columns medium-4 large-3 medium-push-8 large-push-9 small-pull-12 h_85vh h_sm_15vh p0" data-sticky-container>

      <div class="columns p0 h_85vh h_sm_15vh sticky complementario_neutral_bg" data-sticky data-margin-top="0" data-anchor="area_contenidos" data-sticky-on="large">

         <div id="" class="vcenter h-a p5 pt0 pb0 pr3">
            <?php $rifa = get_page_by_title("Rifa"); ?>
            <h4 class="mb1">Rifa de arte</h4>

            <div class="contenido">
               <?php echo apply_filters('the_content', $rifa->post_content); ?>
            </div>

            <div id="boletos-compra" class="small-12 mt2">
            <!-- <div id="boletos-compra" class="small-12 mt2" data-sticky-container> -->
               <!-- <div class="columns sticky" data-sticky data-sticky-on="[small]"> -->
                  <?php
                  global $woocommerce;
                  // var_dump(count($woocommerce->cart->cart_contents));
                  // var_dump($woocommerce->cart->get_checkout_url()); ?>
                  <a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" class="w_100 h_5vh columns">
                     <button class="button neutral_bd black white_hover small-12 columns fontRL white h_a">
                        <!-- <a href="#" class="w_100 h_5vh columns"> -->
                        Selecciona tus boletos
                     </button>
                  </a>
               <!-- </div> -->

            </div>

         </div><!-- Avisos sticky -->

      </div>

   </div>

   <?php endif; ?>






   <!-- main -->
   <main id="main" class="columns medium-8 large-9  medium-pull-4 large-pull-3 small-push-12 h-a p0 m0">

      <div id="contenido-general" class="columns ha p0">
         <div id="area_contenidos" class="small-12 small-pull-12 p0 columns ha pb5">
