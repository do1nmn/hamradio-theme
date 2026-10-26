<?php
/*
Template Name: Kontakt & Sked
*/
get_header(); ?>

<main class="site-main">
    <div class="content-area">
        <article class="card">
            <h1 class="card-title">Kontakt & Sked Anfragen</h1>
            <p>Du möchtest ein QSO vereinbaren, benötigst Hilfe bei einem 3D-Druck Gehäuse oder hast Fragen zu den Codeplugs?</p>

            <form style="display:flex; flex-direction:column; gap:15px; margin-top:20px;">
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Name / Rufzeichen:</label>
                    <input type="text" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;" placeholder="z.B. DJ1AA">
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">E-Mail-Adresse:</label>
                    <input type="email" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;" placeholder="name@example.com">
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Betreff:</label>
                    <select style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                        <option>Sked Anfrage (CW/SSB/FT8)</option>
                        <option>Frage zu 3D-Druck & Laser Files</option>
                        <option>Codeplug Support</option>
                        <option>Sonstiges</option>
                    </select>
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Nachricht:</label>
                    <textarea rows="5" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;" placeholder="Deine Nachricht..."></textarea>
                </div>
                <button type="submit" class="btn">Nachricht absenden</button>
            </form>
        </article>
    </div>

    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>