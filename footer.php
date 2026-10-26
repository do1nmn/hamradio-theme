<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Amateurfunk & Maker Portal</p>
        <div class="footer-links">
            <?php
            if (has_nav_menu('footer')) {
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                ));
            } else {
                echo '<a href="' . esc_url(home_url('/impressum')) . '">Impressum</a> | ';
                echo '<a href="' . esc_url(home_url('/datenschutz')) . '">Datenschutz</a>';
            }
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>