<?php get_header();
    $introduction = get_field("introduction");
    $titre = get_field("titre");

?>
<h1 style="color:white;">
    <?php
    echo $introduction;
    ?>
</h1>


<p>
    test
</p>



<?php get_footer() ?>
