<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h3>Résultats de la recherche</h3>
<?php
    if(have_posts()):
        while (have_posts()) : the_post(); 
        $ma_categorie = '4w4';
            get_template_part("template-parts/search", $ma_categorie);
      endwhile;
endif;?>


</main>
<?php get_footer(); ?>