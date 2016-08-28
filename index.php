<?php
/*
Template Name: Inicio
*/

get_header();



global $mainPages;
$mainPages = get_pages( array( "child_of" => get_the_id(), "parent" => get_the_id(), 'sort_column' => 'menu_order', 'sort' => 'desc' ));

get_template_part( 'secciones/inicio/00-portada' );
get_template_part( 'secciones/inicio/01-intro' );
get_template_part( 'secciones/inicio/02-obras' );
get_template_part( 'secciones/inicio/03-info-tienda' );


get_footer();
