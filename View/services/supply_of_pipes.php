
<?php

// Determine BASE_URL source
if (isset($BASE_URL)) {
    // From global variable (direct access)
    $base = $BASE_URL;
} elseif (isset($_GET['BASE_URL'])) {
    // From AJAX call
    $base = $_GET['BASE_URL'];
} else {
    // Fallback
    $base = "/gvcp";
}
echo <<<supply_of_pipes
    <img class="services-main-pic" src="{$base}/bg/pipes.jpg"><br>
    <h5 class="section-title">Supply of Pipes</h5>
    <p>
        Milo Tech Services provides a wide range of durable, industry-standard pipes 
        designed for multiple applications. Whether for water supply, drainage systems, 
        or construction projects, our pipes are sourced from trusted manufacturers 
        to ensure reliability, efficiency, and compliance with both national and 
        international standards. With us, customers receive products that deliver 
        long-lasting performance and value.
    </p>

    <!-- Service details with image and description -->
    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/water pipe.png" class="img-fluid rounded" alt="Water Supply Pipes">
        </div>
        <div class="col-md-9">
            <b>Water Supply Pipes</b>
            <p>
                We supply high-quality water pipes suitable for residential, commercial, 
                and industrial water distribution systems. Our pipes are designed to 
                withstand pressure, ensuring leak-free and efficient water delivery.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/drainagepipe.jpeg" class="img-fluid rounded" alt="Drainage Pipes">
        </div>
        <div class="col-md-9">
            <b>Drainage Pipes</b>
            <p>
                Our drainage pipes are built for durability and efficiency, making them 
                ideal for stormwater management and sewage systems. They are resistant 
                to corrosion, ensuring long-term performance in challenging conditions.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/insudtair pipe.jpg" class="img-fluid rounded" alt="Construction & Industrial Pipes">
        </div>
        <div class="col-md-9">
            <b>Construction & Industrial Pipes</b>
            <p>
                For construction projects and industrial use, we provide heavy-duty pipes 
                that meet strict engineering standards. These are suitable for large-scale 
                infrastructure, ensuring strength, safety, and long service life.
            </p>
        </div>
    </div>
supply_of_pipes;
?>
