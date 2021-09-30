<?php wp_footer(); 
$adress1=get_field('adresse_1', 'options');
$adress2=get_field('adresse_2', 'options');
$nom=get_field('nom', 'options');
$tel=get_field('telephone', 'options');
$email=get_field('email', 'options');
?> 
<footer>
    <?php wp_nav_menu($args = array(
        'menu' => 'header',
        'menu_class' => 'menu-footer'
    ));
    ?>
    <p class="footer-name"><?= $nom ?></p>
    <div class="footer-telephonediv">
        <a class="footer-telephone" href="tel:+<?php echo trim($tel); ?>">+<?= $tel ?></a>
    </div>
    <a class="footer-email" href="mailto:<?= $email ?>"><?= $email ?></a>
    <p class="footer-adress1"><?= $adress1 ?></p>
    <p class="footer-adress2"><?= $adress2 ?></p>
</footer>
</body>
</html>