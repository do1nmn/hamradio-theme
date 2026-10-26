<?php
/*
Template Name: 3D-Druck & Lasern
*/
get_header(); ?>

<main class="site-main">
    <div class="content-area">
        <article class="card">
            <h1 class="card-title">3D-Druck & Lasercutting Projekte</h1>
            <p>Spezielle Halterungen, wetterfeste Gehäuse und gelaserte Acryl-/Alu-Frontplatten für Afu-Projekte.</p>

            <div class="card" style="background:#f8f9fa; border:1px solid #dee2e6;">
                <h3>📦 MagLoop Abstimm-Gehäuse (PETG)</h3>
                <p>Wetterfestes IP65 Gehäuse für Kondensator & Übersetzungsmotor an einer Magnetic Loop.</p>
                <p><strong>Inklusive:</strong> STL-Dateien, Fusion360 Step-Dateien, DXF für Laser-Schnitt der Frontplatte.</p>
                <a href="#" class="btn">3D & Laser Pakete Herunterladen (.zip)</a>
            </div>

            <div class="card" style="background:#f8f9fa; border:1px solid #dee2e6; margin-top:20px;">
                <h3>📻 Mobilgeräte Standfuß für Yaesu FT-891</h3>
                <p>Ergonomischer Tischaufsteller mit Aussparung für Kühlventilator und Kabelführung.</p>
                <p><strong>Materialempfehlung:</strong> PLA+ oder PETG, 20% Infill.</p>
                <a href="#" class="btn">STL Download (.stl)</a>
            </div>
        </article>
    </div>

    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>