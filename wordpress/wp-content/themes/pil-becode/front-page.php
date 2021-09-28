<?php 
    get_header(); 
    $punchLine = get_field('punch_line');
    $video = get_field('video');
    $image = get_field('image');
    $titreVideo = get_field('titre');
?>
<?php if($punchline):?>
    <h1 class = "topbanner-punchline"><?= $punchLine; ?>
<?php endif; ?>
<?php get_footer(); ?>