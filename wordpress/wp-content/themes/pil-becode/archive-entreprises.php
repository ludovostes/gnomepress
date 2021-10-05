<?php
/* Template Name: Nos Entreprises */
get_header();
$posts = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'entreprise'
));
if($posts) : ?>
<ul class="entreprises-list">
    <?php foreach ($posts as $post) :
    setup_postdata($post); //ça permet d'utiliser the_title etc
    $image = get_field('image');
    $categories = get_field('categories');
    //print_r($categories);
    ?>
    <li class="entreprises-listitem">
        <div class="entreprises-catégories">
        <h2 class="entreprises-nom"><?php the_title() ?></h2>
        <?php foreach($categories as $category): if($category->parent == 0):?>
            <p class="entreprises-catégorie"><?php echo $category->name?></p>
            <?php endif;
            endforeach;
            ?>
            <img id="accordeonButton" src="http://localhost/wp-content/uploads/2021/10/arrow-down.svg" class="entreprises-accordeonbutton">
        </div>
        <div class="entreprises-info">
        <img class="entreprises-image" src="<?php echo $image['sizes']['medium'] ?>">
        <ul class="entreprises-contact">
            <li><a class="entreprises-téléphone" href="phoneto:<?php the_field('telephone')?>">+<?php the_field('telephone')?></a></li>
            <li><a class="entreprises-email" href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a></li>
            <li><a class="entreprises-website" href="<?php the_field('website')?>" target="_blank"><?php the_field('website')?></a></li>
            <div class="entreprises-souscatégories">
            <?php foreach($categories as $category): if($category->parent != 0):?>
            <p class="entreprises-souscatégorie"><?php echo $category->name ?></p>
            <?php endif;
            endforeach;
            ?>
            </div>
        </ul>
    </li>
<?php endforeach;?>
    </ul>
    <?php wp_reset_postdata();?>
<?php endif; 
get_footer(); ?>