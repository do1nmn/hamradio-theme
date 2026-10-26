<?php
if (is_active_sidebar('main-sidebar')) :
    dynamic_sidebar('main-sidebar');
else :
?>
    <div class="card">
        <h3 class="card-title">Radio Status</h3>
        <p><strong>Rufzeichen:</strong> DL9HAM</p>
        <p><strong>DMR ID:</strong> 262xxxx</p>
        <p><strong>Equipment:</strong> Yaesu FT-991A, Anytone AT-D878UV</p>
    </div>
    <div class="card">
        <h3 class="card-title">Maker Corner</h3>
        <p><strong>3D Drucker:</strong> Bambu Lab X1C</p>
        <p><strong>Laser:</strong> 40W CO2 Laser</p>
        <p><strong>CAD:</strong> Fusion 360 & OpenSCAD</p>
    </div>
<?php endif; ?>