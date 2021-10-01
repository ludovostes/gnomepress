
<?php
    //Template Name: Homepage
    get_header(); 
    $punchLine = get_field('punch_line');
    
    $video = get_field('video');
    preg_match('/src="(.+?)"/', $video, $matches);
    $src = $matches[1];
    $params = array(
        'controls' => 0
    );
    $new_src = add_query_arg($params, $src);
    $video = str_replace($src, $new_src, $video);

    $image = get_field('image');
    $imageSrc = $image['sizes']['medium'];
    $titreVideo = get_field('titre_video');

    $pilNom = get_field('nom', 'options');

    
?>
<?php if($punchLine):?>
    <h1 class = "topbanner-punchline"><?= $punchLine; ?></h1>
<?php endif; ?>
    <button class="topbanner-scrollbutton"></button>
<div id="mediacontainer" class="topbanner-mediacontainer">
<?php if($video): ?>
        <?= $video ?>
        <button id="playbutton" class="topbanner-videoplaybutton">Voir la vidéo</button>
    <?php if($titreVideo): ?>
        <p class ="topbanner-titrevideo"><?= $titreVideo ?></p>
    <?php endif; ?>
<?php else: ?>
    <?php if($image) : ?>
        <img class="topbanner-image" src="<?= $imageSrc ?>">
    <?php endif; ?>
<?php endif; ?>
</div>

<script src="./js/playvideo.js"></script>
<?php get_footer(); ?>