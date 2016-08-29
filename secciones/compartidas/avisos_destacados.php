<?php
$avisos_pagina = get_page_by_title("Avisos");

$avisos = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'aviso', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
?>
