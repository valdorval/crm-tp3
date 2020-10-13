<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap" rel="stylesheet">
     <title>CRM</title>
     <?php wp_head(); ?>
</head>

<body>

     <header class="header">
          <h1>EZ Tracking</h1>

          <nav class="nav" id="nav-menu">
               <?php wp_nav_menu(
                    array(
                         'theme_location' => 'main_nav',
                         'container' => 'ul',
                         'menu_class' => 'nav__menu container-big flex center'
                    )
               ); ?>
          </nav>
          <div class="header__box">
               <button class="btn">Essayez notre démo!</button>
          </div>
     </header>