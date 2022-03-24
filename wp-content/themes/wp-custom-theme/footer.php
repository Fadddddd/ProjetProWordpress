<footer>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!--<a class="navbar-brand" href="#">Lernumerique</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto',
                ]) ?>


            </div>
        </div>


    </nav>

</footer>

<?php wp_footer(); ?>
</body>

</html>