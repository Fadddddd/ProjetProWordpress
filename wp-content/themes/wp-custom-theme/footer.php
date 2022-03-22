<footer>
    <?php
    //création menu footer
    wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav me-auto',
    ]) ?>

    <a class="footer" href="https://www.linkedin.com/in/eck-ines-8422993a/">LinkedIn</a>
    <a class="footer" href="mailto:webmaster@example.com">Email</a>
</footer>
<?php wp_footer(); ?>
</body>

</html>