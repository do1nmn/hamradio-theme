<?php
/*
Template Name: Projekte
*/
get_header(); ?>

<main class="site-main">
    <div class="content-area">
        <article class="card">
            <h1 class="card-title">Eigenbau & AFU-Projekte</h1>
            <p>Übersicht aller laufenden und abgeschlossenen Bauprojekte im Shack.</p>

            <div class="grid-2">
                <div class="card" style="background:#f8f9fa;">
                    <h3>🌐 Remote WSPR Bake (ESP32)</h3>
                    <p>Stand-Alone WSPR Sender für 20m/40m mit GPS Zeitsynchronisation.</p>
                    <a href="#" class="btn">Projektbericht lesen</a>
                </div>
                <div class="card" style="background:#f8f9fa;">
                    <h3>⚡ QRP Endfed Antenne (10-80m)</h3>
                    <p>49:1 Unun Übertrager im 3D-Druck Gehäuse mit 20.3m Strahler.</p>
                    <a href="#" class="btn">Projektbericht lesen</a>
                </div>
            </div>
        </article>
    </div>

    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>