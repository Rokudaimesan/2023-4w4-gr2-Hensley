<?php
get_header();
/**
* Template Name: atelier
*
*
*/
?>

<main class="site__main">
<article class="atelier">
<h1> Atelier : <?php the_title(); ?> </h1>
    <h3>Description de l'atelier</h3>
     <p class="atelier__animateur"> L'animateur de l'atelier : <?php the_field('animateur'); ?> </p>
     <p class="atelier__local"> L'atelier sera donné au local : <?php the_field('local'); ?> </p>
     <p class="atelier__description"> <?php the_field('description'); ?> </p>

     <h3>Horaire et dates de l'atelier</h3>
     <p class="atelier__duree"> La durée de chacune des séances est de : <?php the_field('duree_dune_seance_datelier'); ?> heures. </p>
     <p class="atelier__dateDebut"> Date de début : <?php the_field('date_de_debut_de_latelier'); ?> </p>
     <p class="atelier__dateFin"> Date de fin : <?php the_field('date_de_fin_de_latelier'); ?> </p>
     <p class="atelier__jours"> La formation se donnera : <?php the_field('jours_de_la_semaine_de_latelier'); ?> </p>
     <p class="atelier__horaire"> L'horaire de : <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?> </p>
     
</article>
</main>
<?php get_footer() ?>