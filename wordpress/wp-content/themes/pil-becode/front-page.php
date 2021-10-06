<?php get_header() 
// Template Name: Homepage
?>
<?php $categories = get_field('categories');
foreach($categories as $category) {
    echo $category->name;
}
?>
<?php get_footer() ?>