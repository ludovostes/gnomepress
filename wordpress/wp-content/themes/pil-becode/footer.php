<?php wp_footer(); 
$adress1=get_field('adresse_1', 'options');
$adress2=get_field('adresse_2', 'options');
$nom=get_field('nom', 'options');
$tel=get_field('telephone', 'options');
$email=get_field('email', 'options');
?> 
<footer>
    <section class="footer">
    <div class="footer-top">
        <div class="footer-topleft">
            <p class="footer-name"><?= $nom ?></p>
            <div class="footer-bottomleft">
                <a class="footer-email" href="mailto:<?= $email ?>"><?= $email ?></a>
                <p class="footer-adress1"><?= $adress1 ?></p>
                <p class="footer-adress2"><?= $adress2 ?></p>
            </div>
        </div>
        <div class="footer-telephonediv">
            <a class="footer-telephone" href="tel:+<?php echo trim($tel); ?>">+<?= $tel ?></a>
        </div>
    </div>
    <?php wp_nav_menu($args = array(
        'menu' => 'footer',
        'menu_class' => 'menu-footer'
    ));
    ?>
    <div class="footer-notediv">
        <div class="footer-noteleft">
            <p class="footer-note">Le Pôle Image © 2021</p>
            <a class="footer-notegreylink" href="#">Politique de confidentialité</a>
        </div>
        <div class="footer-noteright">
            <p class="footer-note">Design by <a href="http://savoirfaire.digital/">savoir-faire.digital</a></p>
            <p class="footer-note">Coded by <a href="http://becode.org/">becode.org</a></p>
        </div>
    </div>
    </section>
</footer>
</body>
</html>