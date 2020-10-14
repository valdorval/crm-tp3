<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
     <title>CRM</title>
     <?php wp_head(); ?>
</head>

<body>

     <header id="header" class="flex grid">
          <div class="container">
               <div class="logo">
                    <div class="logo--titre">cosTOMers</div>
               </div>

          </div>

          <nav class="nav" id="nav-menu">
               <?php wp_nav_menu(
                    array(
                         'theme_location' => 'main_nav',
                         'container' => 'ul',
                         'menu_class' => 'nav__menu container-big flex center'
                    )
               ); ?>
          </nav>
     </header>