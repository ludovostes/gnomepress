<?php
/* Template Name: Nos Entreprises */
$posts = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'entreprise'
));
if($posts) : ?>
<ul>
    <?php foreach ($posts as $post) :
    setup_postdata($post); //ça permet d'utiliser the_title etc
    $image = get_field('image');
    $categories = get_field('categories');
    //print_r($categories);
    ?>
    <li>
        <h2><?php the_title() ?></h2>
        <?php foreach($categories as $category): if($category->parent == 0):?>
            <p><?php echo $category->name?></p>
            <?php endif;
            endforeach;
            ?>
        <img src="<?php echo $image['sizes']['medium'] ?>">
        <ul>
            <li><a href="phoneto:<?php the_field('telephone')?>">+<?php the_field('telephone')?></a></li>
            <li><a href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a></li>
            <li><a href="<?php the_field('website')?>" target="_blank"><?php the_field('website')?></a></li>
        <?php foreach($categories as $category): if($category->parent != 0):?>
            <p><?php echo $category->name ?></p>
            <?php endif;
            endforeach;
            ?>

        </ul>
    </li>
<?php endforeach;?>
    </ul>
    <?php wp_reset_postdata();?>
<?php endif; 
get_footer(); ?>