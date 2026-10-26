<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <span class="callsign-badge">DL9HAM</span>
        </div>
        <nav class="main-navigation">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
            } else {
                echo '<ul>';
                echo '<li><a href="' . esc_url(home_url('/')) . '">Info & Home</a></li>';
                echo '<li><a href="' . esc_url(home_url('/projekte')) . '">Projekte</a></li>';
                echo '<li><a href="' . esc_url(home_url('/3d-druck-lasern')) . '">3D Druck & Lasern</a></li>';
                echo '<li><a href="' . esc_url(home_url('/downloads')) . '">Downloads</a></li>';
                echo '<li><a href="' . esc_url(home_url('/kontakt')) . '">Kontakt</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>
    </div>
</header>

<section class="hero-banner">
    <div class="hero-content">
        <h2>Amateurfunk, 3D-Druck & Lasercutting</h2>
        <p>QTH: JN59xx | Bands: 80m - 70cm | DMR / C4FM / FT8</p>
        <div class="status-pills">
            <span class="status-pill online">● QAP (On Air)</span>
            <span class="status-pill">SFI: 145</span>
            <span class="status-pill">K-Index: 2 (Quiet)</span>
            <span class="status-pill">A-Index: 7</span>
        </div>
    </div>
</section>