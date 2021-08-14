</div>

<footer id="footer" class="site-footer">
    <div class="container">

        <div class="column one-third">
            <a class="logo" href="<?= home_url(); ?>">
            <?php $image = get_field('logo', 'options');
            if ($image) : ?>
                <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" />
            <?php endif; ?>
            </a>
        </div>

        <div class="column one-third">
            <nav>
                <?php wp_nav_menu(['theme_location' => 'footer-menu', 'depth' => 1]); ?>
            </nav>
        </div>

        <div class="column one-third">

        </div>

    </div>

</footer>

<div id="socket" class="socket">
    <?php wp_nav_menu(['theme_location' => 'socket-menu', 'depth' => 1]); ?>
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>

  
