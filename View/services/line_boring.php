<?php
echo <<<line_boring
    <img class="services-main-pic" src="{$_GET['BASE_URL']}/bg/line-boring.jpg"><br>
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
            <img src="{$_GET['BASE_URL']}/bg/line-boring.jpg" class="img-fluid rounded" alt="Heavy Machinery Repairs">
        </div>
        <div class="col-md-9">
            <h6>Heavy Machinery Repairs</h6>
            <p>
                Our team performs accurate boring on equipment such as excavators, bulldozers, 
                loaders, and cranes. This ensures worn parts are repaired with precision, 
                restoring machines to full functionality.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$_GET['BASE_URL']}/bg/line-boring.jpg" class="img-fluid rounded" alt="Pivot Point Restoration">
        </div>
        <div class="col-md-9">
            <h6>Pivot Point Restoration</h6>
            <p>
                We restore worn pivot points and joints, ensuring smooth movement and extended 
                service life of critical machine components, helping reduce wear and tear 
                on connected parts.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$_GET['BASE_URL']}/bg/line-boring.jpg" class="img-fluid rounded" alt="Bearing Housing Rebuilds">
        </div>
        <div class="col-md-9">
            <h6>Bearing Housing Rebuilds</h6>
            <p>
                Our line boring services include rebuilding and resizing bearing housings 
                to factory specifications. This ensures proper alignment and performance 
                of shafts and rotating components.
            </p>
        </div>
    </div>
line_boring;
?>
