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
        <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/line-boring.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                 <h5 class="section-title">Line Boring</h5>
                <p>
                        GVCP Services specializes in on-site line boring solutions designed to restore 
                        precision and extend the life of heavy machinery. Our portable boring equipment allows 
                        us to repair worn or misaligned bores quickly and effectively, eliminating the need for 
                        expensive part replacements. By reducing downtime and improving reliability, we help 
                        businesses keep their operations running smoothly and cost-effectively.
                </p>
            </div>
            <div class = "col-md-12">
                <br>
                <hr id='hr'>
                <br>
            </div>
            <!-- Service details with image and description -->
            <div class = "col-md-4">
                <img src="{$base}/bg/images (5).jpeg" class="img-fluid rounded" alt="Road Construction"><br>
                <b>Heavy Machinery Repairs</b>
                <p>
                    Our team performs accurate boring on equipment such as excavators, bulldozers, 
                    loaders, and cranes. This ensures worn parts are repaired with precision, 
                    restoring machines to full functionality.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/images (4).jpeg" class="img-fluid rounded" alt="House Building"><br>
                 <b>Pivot Point Restoration</b>
                <p>
                   We restore worn pivot points and joints, ensuring smooth movement and extended 
                service life of critical machine components, helping reduce wear and tear 
                on connected parts.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/images (3).jpeg" class="img-fluid rounded" alt="Drainage Development"><br>
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
