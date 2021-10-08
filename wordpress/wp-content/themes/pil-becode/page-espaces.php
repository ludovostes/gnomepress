<?php

/* Template Name: Nos Espaces */
get_header();
$titre1 = get_field('titre_espaces');
$image1 = get_field('image_espaces');
$titre2 = get_field('titre_espaces_2');
$texte1 = get_field('texte_espaces');
$texte2 = get_field('zone_de_texte_espaces');
$link = get_field('lien_espaces');
$titre3 = get_field('titre_espaces_3');
$introduction = get_field('introduction_espaces');
$image2 = get_field('image_espaces_2');
?>
<main class="espaces">
    <section class="espaces-white">
        <h1 class="espaces-titre"><?= $titre1 ?></h1>
        <img src="<?= $image1['sizes']['large'] ?>">

        <section class="espaces-introduction">
            <div class="espaces-introductiongauche">
                <h1 class="espaces-titre2"><?= $titre2 ?></h1>
                <p class="espaces-soustitre"><?= $texte1 ?></p>
            </div>
            <div class="espaces-introductiondroite">
                <div class="espaces-texte"><?= $texte2 ?></div>
                <a href="<?= $link ?>" class="espaces-boutonlien">Réservez votre espace + </a>
            </div>
        </section>

    </section>

    <section class="espaces-black">

        <section class="espaces-main">

            <div class="espaces-mainintro">
                <h1 class="espaces-titre3"><?= $titre3 ?></h1>
                <p class="espaces-mainintrotext"><?= $introduction ?></p>
            </div>

            <img src="<?= $image2['sizes']['1536x1536'] ?>" class="espaces-mainimg">

            <?php if(have_rows('accordeon_espaces')):?>

                <?php while(have_rows('accordeon_espaces')): the_row();?>

                    <div class="espaces-accordeontop">
                        <h2 class="espaces-titreaccordeon"><?php the_sub_field('titre_accordeon_espaces'); ?></h2>
                        <img src="#" class="espaces-arrowaccordeon">
                    </div>

                    <div class="espaces-accordeoncontenu">
                        <p class="espaces-accordeontexte"><?php the_sub_field('texte_accordeon_espaces'); ?></p>
                        <div class="espaces-accordeoncontenudroite">
                            <h3 class="espaces-accordeontitreliste"><?php the_sub_field('petit_titre_accordeon_espaces') ?></h3>

                            <?php if(have_rows('liste_espaces')): the_row(); ?>
                                <ul class="espaces-accordeonlistegauche">

                                    <?php while(have_rows('liste_espaces')): the_row(); ?>
                                        <li class="espaces-accordeonlisteitem"><?php the_sub_field('liste_accordeon_espaces_1'); ?></li>
                                    <?php endwhile; ?>

                                </ul>
                                <ul class="espaces-accordeonlistedroite">

                                    <?php while(have_rows('liste_espaces')): the_row(); ?>
                                        <li class="espaces-accordeonlisteitem"><?php the_sub_field('liste_accordeon_espaces_2'); ?></li>
                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </section>
    </section>
</main>

<?php get_footer(); ?>