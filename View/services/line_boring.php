<?php

// Determine BASE_URL source
if (isset($BASE_URL)) {
    // From global variable (direct access)
    $base = $BASE_URL;
} elseif (isset($base)) {
    // From AJAX call
    $base = $base;
} else {
    // Fallback
    $base = "/gvcp";
}
echo <<<line_boring
    <img class="services-main-pic" src="{$base}/bg/line-boring.jpg"><br>
    <h5 class="section-title">Line Boring</h5>
    <p>
        Milo Tech Services specializes in on-site line boring solutions designed to restore 
        precision and extend the life of heavy machinery. Our portable boring equipment allows 
        us to repair worn or misaligned bores quickly and effectively, eliminating the need for 
        expensive part replacements. By reducing downtime and improving reliability, we help 
        businesses keep their operations running smoothly and cost-effectively.
    </p>

    <!-- Service details with image and description -->
    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/images (5).jpeg" class="img-fluid rounded" alt="Heavy Machinery Repairs">
        </div>
        <div class="col-md-9">
            <b>Heavy Machinery Repairs</b>
            <p>
                Our team performs accurate boring on equipment such as excavators, bulldozers, 
                loaders, and cranes. This ensures worn parts are repaired with precision, 
                restoring machines to full functionality.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/images (4).jpeg" class="img-fluid rounded" alt="Pivot Point Restoration">
        </div>
        <div class="col-md-9">
            <b>Pivot Point Restoration</b>
            <p>
                We restore worn pivot points and joints, ensuring smooth movement and extended 
                service life of critical machine components, helping reduce wear and tear 
                on connected parts.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/images (3).jpeg" class="img-fluid rounded" alt="Bearing Housing Rebuilds">
        </div>
        <div class="col-md-9">
            <b>Bearing Housing Rebuilds</b>
            <p>
                Our line boring services include rebuilding and resizing bearing housings 
                to factory specifications. This ensures proper alignment and performance 
                of shafts and rotating components.
            </p>
        </div>
    </div>
line_boring;
?>
