<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        wp_head(); 
        $adress1=get_field('adresse_1', 'options');
        $adress2=get_field('adresse_2', 'options');
        $nom=get_field('nom', 'options');
        $tel=get_field('telephone', 'options');
        $email=get_field('email', 'options');
    ?>
</head>
<body>
    