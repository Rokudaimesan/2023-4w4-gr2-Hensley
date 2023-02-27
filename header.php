<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="site">
   <header class="site_header">
      <section class="site_header_logo">
         <div class="logomenu">
      <?php the_custom_logo();?>
      <?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
     ))?>
     </div>
     <?php get_search_form(); ?>
      </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h2><?= bloginfo('description') ?></h2>
   </header>
   <aside class="site_aside">
      <h3>Menu secondaire</h3>
      <?php wp_nav_menu(array(
         "menu" => "aside",
         "container" => "nav"
      )); ?>
   </aside>