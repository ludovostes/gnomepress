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
    ?>
    <li>
        <h2><?php the_title() ?></h2>
        <p><?php the_field('categories') ?></p>
        <img src="<?php the_field('image')['size']['medium'] ?>">
        <a href="phoneto:<?php the_field('telephone')?>">+<?php the_field('telephone')?></a>
        <a href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a>
        <a href="<?php the_field('website')?>" target="_blank"><?php the_field('website')?></a>
    </li>
<?php endforeach;?>
    </ul>
    <?php wp_reset_postdata();?>
<?php endif; 
get_footer(); ?>