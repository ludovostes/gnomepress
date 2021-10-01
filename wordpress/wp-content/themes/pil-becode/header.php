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
    <link rel="stylesheet" href="css/style.css"/>
    <?php wp_head(); //donne accès à la barre de config wordpress?>
</head>

<body>
    <div class="header">
        <div class="header-logo-svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="75.749" height="75.251" viewBox="0 0 75.749 75.251">
                <g id="Group_17448" data-name="Group 17448" transform="translate(0 0)">
                <path id="Path_13718" data-name="Path 13718" d="M202.684,2529.559V2527.2H189.671v2.439l.971-.007v.007Z" transform="translate(-162.318 -2484.724)" fill="#171717"/>
                <path id="Path_13719" data-name="Path 13719" d="M186.788,2553.54l2.1-2.169a9.065,9.065,0,0,0,5.555,1.827h.35a9.161,9.161,0,0,0,6.84-2.942,9.666,9.666,0,0,0,2.807-6.88,9.255,9.255,0,0,0-1.868-5.674l2-2.073-1.666-1.665-1.987,1.987a9.464,9.464,0,0,0-6.3-2.282,9.571,9.571,0,0,0-6.966,2.873,9.323,9.323,0,0,0-2.9,6.813,9.55,9.55,0,0,0,2.387,6.374l-2.082,2.082Zm13.034-15.362a7.469,7.469,0,0,1,.02,10.531,6.927,6.927,0,0,1-5.188,2.21,7.012,7.012,0,0,1-4.587-1.617l-1.25-1.25v0a6.98,6.98,0,0,1-1.627-4.582,7.217,7.217,0,0,1,2.218-5.273,7.038,7.038,0,0,1,5.228-2.252A6.937,6.937,0,0,1,199.821,2538.178Z" transform="translate(-161.105 -2486.321)" fill="#171717"/>
                <path id="Path_13720" data-name="Path 13720" d="M216.757,2503.052l.155-.17v-3.914l-1.089,1.616a7.5,7.5,0,0,1-2.473,2.317,6.61,6.61,0,0,1-3.356.855,5.894,5.894,0,0,1-3.34-1.233l10.589-10.454-.382-.423a8.444,8.444,0,0,0-6.459-2.984,8.625,8.625,0,0,0-6.3,2.536,8.225,8.225,0,0,0-2.555,6.015,8.422,8.422,0,0,0,2.568,6.078,8.255,8.255,0,0,0,6.05,2.608h.306A8.226,8.226,0,0,0,216.757,2503.052Zm-6.645-12.246a6.391,6.391,0,0,1,3.918,1.286l-8.953,8.891a6.291,6.291,0,0,1-1.254-3.873,6.559,6.559,0,0,1,6.288-6.3Z" transform="translate(-165.246 -2475.219)" fill="#171717"/>
                <path id="Path_13721" data-name="Path 13721" d="M225.178,2549.445h.6v-2.279h-.6a4.747,4.747,0,0,1-4.8-4.882v-23.519h-2.435v23.519a6.823,6.823,0,0,0,2.128,5.152A7.184,7.184,0,0,0,225.178,2549.445Z" transform="translate(-169.29 -2482.644)" fill="#171717"/>
                <path id="Path_13722" data-name="Path 13722" d="M189.466,2499.488a7.184,7.184,0,0,0,5.111,2.009h.6v-2.279h-.6a4.748,4.748,0,0,1-4.8-4.881v-23.519h-2.434v23.519A6.824,6.824,0,0,0,189.466,2499.488Z" transform="translate(-161.742 -2470.818)" fill="#171717"/>
                <path id="Path_13723" data-name="Path 13723" d="M243.815,2549.984a7.617,7.617,0,0,1-3.878.988,6.884,6.884,0,0,1-3.949-1.484l12.116-11.962-.382-.422a9.572,9.572,0,0,0-7.32-3.382,9.78,9.78,0,0,0-7.14,2.873,9.322,9.322,0,0,0-2.9,6.814,9.542,9.542,0,0,0,2.911,6.887,9.358,9.358,0,0,0,6.854,2.955h.35a9.319,9.319,0,0,0,7.122-3.225l.155-.17v-4.162l-1.089,1.617A8.621,8.621,0,0,1,243.815,2549.984ZM240.073,2536a7.4,7.4,0,0,1,4.607,1.545l-10.371,10.3a7.274,7.274,0,0,1-1.507-4.555,7.58,7.58,0,0,1,7.271-7.29Z" transform="translate(-172.355 -2486.333)" fill="#171717"/>
                <path id="Path_13724" data-name="Path 13724" d="M171.136,2550.468a10.373,10.373,0,0,0-7.4-17.691,10.441,10.441,0,0,0-5.247,1.447,9.552,9.552,0,0,0-2.609,2.157v-3.148h-2.517v28.118h2.517V2549.87a10.093,10.093,0,0,0,2.714,2.227,10.311,10.311,0,0,0,5.142,1.424A10.121,10.121,0,0,0,171.136,2550.468Zm.537-7.3a7.725,7.725,0,0,1-2.317,5.631,7.424,7.424,0,0,1-5.56,2.368,8.1,8.1,0,0,1-8-7.979,7.735,7.735,0,0,1,2.376-5.65,7.541,7.541,0,0,1,5.6-2.412,7.437,7.437,0,0,1,5.559,2.389A7.762,7.762,0,0,1,171.673,2543.171Z" transform="translate(-153.362 -2486.1)" fill="#171717"/></g>
            </svg>
        </div>
        <div class="header-nav-menu">
            <?php 
                wp_nav_menu($args = array(
                    'menu' => 'navmenu',//name of menu
                    'menu_class' => 'header-nav'
                    //https://developer.wordpress.org/reference/functions/wp_nav_menu/ for all parameters
                ));

                $adress1=get_field('adresse_1', 'options');
                $adress2=get_field('adresse_2', 'options');
                $nom=get_field('nom', 'options');
                $tel=get_field('telephone', 'options');
                $email=get_field('email', 'options');
            ?>
        </div>
                <div class="header-arrow-contact-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.53" height="8.71" viewBox="0 0 13.53 8.71">
                        <g id="arrow-right" transform="translate(0 0.354)">
                        <line id="Line_554" data-name="Line 554" x2="13.166" transform="translate(0 4.001)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_13528" data-name="Path 13528" d="M43,14l4,4-4,4" transform="translate(-33.972 -14)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1"/></g>
                    </svg>
                </div> 
    </div>
