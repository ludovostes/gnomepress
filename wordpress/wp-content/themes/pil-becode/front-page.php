
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
    echo $new_src;
    $video = str_replace($src, $new_src, $video);

    $image = get_field('image');
    $imageSrc = $image['sizes']['medium'];
    $titreVideo = get_field('titre');
?>
<?php if($punchLine):?>
    <h1 class = "topbanner-punchline"><?= $punchLine; ?></h1>
<?php endif; ?>

<?php if($video): ?>
    <div class="topbanner-videocontainer" style="position:relative;display:flex;justify-content:center;">
        <?= $video ?>
        <button id="playbutton" class="topbanner-videoplaybutton" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);border-radius:50%;width:100px;height:100px;border:none;background:#FFC33B;">Voir la vidéo</button>
    <?php if($titreVideo): ?>
        <p class ="topbanner-titrevideo" style="position:absolute;left:50%;top:50%;transform:translate(-50%,50px);color:white;"><?= $titreVideo ?></p>
    </div>
    <?php endif; ?>
<?php else: ?>
    <?php if($image) : ?>
        <img src="<?= $imageSrc ?>">
    <?php endif; ?>
<?php endif; ?>
<script src="./js/playvideo.js"></script>
<?php get_footer(); ?>