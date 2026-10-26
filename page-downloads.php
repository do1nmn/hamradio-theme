<?php
/*
Template Name: Downloads Page
*/
get_header(); ?>

<main class="site-main">
    <div class="content-area" style="grid-column: 1 / -1;">
        <article class="card">
            <h1 class="card-title">Downloads & Codeplugs</h1>
            <p>Hier findest du vorgefertigte DMR-Codeplugs, Frequenzlisten, Arduino-Quellcode und KiCAD-Schaltpläne für den Amateurfunk.</p>
            
            <div class="grid-2" style="margin-top: 20px;">
                <div class="card" style="background:#f8f9fa;">
                    <h3>📻 Anytone AT-D878UV Codeplug</h3>
                    <p>Aktualisierte DMR-Zone für Deutschland (DL-Wide, BrandMeister & TGIF).</p>
                    <p><strong>Format:</strong> .rdps / .json</p>
                    <a href="#" class="btn">Download (.zip)</a>
                </div>
                <div class="card" style="background:#f8f9fa;">
                    <h3>🛰️ Chirp CSV Frequenzliste 2m/70cm</h3>
                    <p>Alle Relais in FM & C4FM inklusive CTSS Tönen für DL/OE/HB9.</p>
                    <p><strong>Format:</strong> CSV für Chirp</p>
                    <a href="#" class="btn">Download (.csv)</a>
                </div>
                <div class="card" style="background:#f8f9fa;">
                    <h3>🔌 Antenna Tuner Controller Source Code</h3>
                    <p>Arduino Sketch zur Ansteuerung von Schrittmotoren an einer Mag-Loop Antenne.</p>
                    <p><strong>Format:</strong> .ino / C++</p>
                    <a href="#" class="btn">Download (.zip)</a>
                </div>
                <div class="card" style="background:#f8f9fa;">
                    <h3>📐 KiCAD Bandpassfilter Schaltplan</h3>
                    <p>7-poliger Chebychev Tiefpassfilter für das 20m Band (Schaltplan & Platine).</p>
                    <p><strong>Format:</strong> KiCAD 7 Project</p>
                    <a href="#" class="btn">Download (.zip)</a>
                </div>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>