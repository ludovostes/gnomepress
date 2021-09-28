<?php
//logo = lien homepage
//menu wp avec les 4 pages
//aside avec les réseaux sociaux
//https://developer.wordpress.org/reference/functions/wp_nav_menu/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() //donne accès à la barre de config wordpress?>
</head>
<body>
<?php 
    wp_nav_menu($args = array(
        'menu' => 'header',//name of menu
        'menu_class' => 'menu-class'
        //https://developer.wordpress.org/reference/functions/wp_nav_menu/ for all parameters
    ));
?>