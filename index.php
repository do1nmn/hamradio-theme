<?php get_header(); ?>

<main class="site-main">
    <div class="content-area">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article class="card">
                    <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <article class="card">
                <h2 class="card-title">Willkommen auf dem Shack- & Maker-Blog!</h2>
                <p>Diese Website kombiniert Leidenschaft für <strong>Amateurfunk (Ham Radio)</strong>, selbsterstellte <strong>3D-Drucke</strong> und <strong>Laser-Gehäusekonstruktionen</strong>.</p>
                <div class="grid-2" style="margin-top: 20px;">
                    <div style="background:#f8f9fa; padding:15px; border-radius:6px; border:1px solid #e9ecef;">
                        <h4>📡 Amateurfunk</h4>
                        <p>QSO-Berichte, DXpeditionen, Antennenbau (Mag-Loops, Endfed) & digitale Betriebsarten.</p>
                    </div>
                    <div style="background:#f8f9fa; padding:15px; border-radius:6px; border:1px solid #e9ecef;">
                        <h4>🛠️ 3D-Druck & Laser</h4>
                        <p>Maßgeschneiderte Gehäuse für Funkgeräte, Halterungen, Frontplatten & STL-Files zum Download.</p>
                    </div>
                </div>
            </article>
        <?php endif; ?>
    </div>

    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>