</div>

<footer id="footer" class="site-footer">
    <div class="container">

        <div class="column one-third">
            <a class="logo" href="<?= home_url(); ?>">
                <?php $image = get_field('logo', 'options');
                if ($image) : ?>
                    <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>"/>
                <?php endif; ?>
            </a>
        </div>

        <div class="column one-third">
            <nav>
                <?php wp_nav_menu(['theme_location' => 'footer-menu', 'depth' => 1]); ?>
            </nav>
        </div>

        <div class="column one-third contact">
            <ul>
                <?php
                $tel = get_field('phone_number', 'options');
                $mail = get_field('email_adress', 'options');
                $location = get_field('location', 'options');
                if (!empty($tel)) {
                    echo '<li><span class="icon phone"></span><a href="tel:' . $tel . '" target="_blank">' . $tel . '</a></li>';
                }
                if (!empty($mail)) {
                    echo '<li><span class="icon mail"></span><a href="mailto:' . $mail . '">' . $mail . '</a></li>';
                }
                if (!empty($location)) {
                    echo '<li><span class="icon location"></span><p>' . $location . '</p></li>';
                }
                ?>
            </ul>
        </div>

    </div>

</footer>

<div id="socket" class="socket">
    <span>Copyright &copy; 2021 Koopman Brandpreventie | Site made by Jurre van Esveld</span>
    <?php wp_nav_menu(['theme_location' => 'socket-menu', 'depth' => 1]); ?>
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>

  
