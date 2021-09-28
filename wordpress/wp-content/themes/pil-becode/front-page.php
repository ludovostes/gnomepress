
<?php
    //Template Name: Homepage
    get_header(); 
    $punchLine = get_field('punch_line');
    $video = get_field('video');
    $image = get_field('image');
    $titreVideo = get_field('titre');
?>
<?php if($punchLine):?>
    <h1 class = "topbanner-punchline"><?= $punchLine; ?></h1>
<?php endif; ?>
<?php get_footer(); ?>