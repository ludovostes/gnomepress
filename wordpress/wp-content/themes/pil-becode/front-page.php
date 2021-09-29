
<?php
    //Template Name: Homepage
    get_header(); 
    $punchLine = get_field('punch_line');
    $video = get_field('video');
    $image = get_field('image');
    $imageSrc = $image['sizes']['medium'];
    $titreVideo = get_field('titre');
?>
<?php if($punchLine):?>
    <h1 class = "topbanner-punchline"><?= $punchLine; ?></h1>
<?php endif; ?>

<?php if($video): ?>
        <?= $video ?>
    <?php if($titreVideo): ?>
        <p class ="topbanner-titrevideo"><?= $titreVideo ?></p>
    <?php endif; ?>
<?php else: ?>
    <?php if($image) : ?>
        <img src="<?= $imageSrc ?>">
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>