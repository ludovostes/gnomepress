<?php get_header();
    $introduction = get_field("introduction");
    $titre = get_field("titre");
    $titre_2 = get_field("titre_2");
?>

<?php
    // Template Name: Template
?>

<!-- Partie 1 / Introduction en trois parties -->
<div class="container1">
    <!-- Texte d'intro -->
    <div class="colonneintro">
        <p class="introduction">
        <?php
        echo $introduction;
        ?>
    </p>
    </div>
    <!-- Intro - Colonne 1 -->
    <div class="colonneintro">
        <h2 class="titreintro">Installation à la pointe</h2>
        <!-- Liste 1 -->
        <?php 
        if( have_rows('titre') ): ?>
            <ul class="liste">
            <?php while( have_rows('titre') ): the_row(); 
            ?>
                <li><?= the_sub_field('liste');
        ?></li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <!-- Colonne 2 -->
    <div class="colonneintro">
        <h2 class="titreintro">Plus qu'un lieu de travail</h2>
        <!-- Liste 2 -->
        <?php 
        if( have_rows('titre') ): ?>
            <ul class="liste">
            <?php while( have_rows('titre') ): the_row(); 
            ?>
                <li><?= the_sub_field('liste');
        ?></li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

<!-- Texte déroulant -->
<p id="textederoulant">30 <sup class="plus">+</sup> entreprises <span class="slash">/</span> 400<sup class="plus">+</sup> personnes <span class="slash">/</span> 35</p>

<!-- Partie 2 -->
<div class="partie2">
<h1 id="vousavezunprojet">Vous avez un projet </br> <span class="orangecolor">audiovisuel ou digital ?</span></h1>
<p>Une entreprise du Pôle peut vous aider !</p>
    <!-- 6 divs -->
    <div class="container2">
        <!-- case 1 -->
        <div class="cases"></div>
        <!-- case 2 -->
        <div class="cases"></div>
        <!-- case 3 -->
        <div class="cases"></div>
        <!-- case 4 -->
        <div class="cases"></div>
        <!-- case 5 -->
        <div class="cases"></div>
        <!-- case 6 -->
        <div id="casevide"></div>
    </div>
</div>

<!-- Partie 3 -->







<!-- Appeler le footer -->
<?php get_footer(); ?>

