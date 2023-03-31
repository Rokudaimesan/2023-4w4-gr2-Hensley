<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="page_search">
<h3>Résultats de la recherche</h3>
<section class="blocflex_search">
<?php
    if(have_posts()):
        while (have_posts()) : the_post(); 
        $ma_categorie = '4w4';
            get_template_part("template-parts/search", $ma_categorie);
            the_excerpt('<p>', '</p>');
            
      endwhile;
endif;?>

</section>
</main>
<?php get_footer(); ?>