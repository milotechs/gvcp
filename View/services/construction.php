<?php
// Detebaseource

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
   echo <<<construction
        <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/construction.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                <h5 class="section-title">Construction Services</h5>
                <p>
                    At GVCP, we provide comprehensive and professional construction services 
                    that cover every stage of development — from design to completion. Our expertise spans 
                    across building works, civil engineering projects, and specialized infrastructure. 
                    With a highly skilled team and access to modern equipment, we guarantee timely delivery, 
                    cost efficiency, and strict adherence to the highest quality and safety standards. 
                    Whether you are planning large-scale infrastructure or residential projects, 
                    we are your trusted partner for sustainable and durable construction solutions.
                </p>
            </div>
            <div class = "col-md-12">
                <br>
                <hr id='hr'>
                <br>
            </div>
            <!-- Service details with image and description -->
            <div class = "col-md-4">
                <img src="{$base}/bg/images.jpeg" class="img-fluid rounded" alt="Road Construction"><br>
                <b>Road Construction</b>
                <p>
                    We design and build modern roads that enhance connectivity and economic growth. 
                    From highways to rural access roads, our work ensures durability, smooth traffic flow, 
                    and compliance with national construction standards.
                </p>
            </div>
            <div class = "col-md-4">
                                        <img src="{$base}/bg/images (2).jpeg" class="img-fluid rounded" alt="House Building"><br>
                <b> <b>House Building</b></b>
                <p>
                   Our residential construction services bring your dream home to life. 
                   We handle everything from foundation to finishing, combining modern design 
                   with quality craftsmanship for safe, comfortable, and beautiful living spaces.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/images (1).jpeg" class="img-fluid rounded" alt="Drainage Development"><br>
                <b> <b>Drainage Development</b></b>
                <p>
                    We construct effective drainage systems that protect communities and infrastructure 
                    from flooding and water damage. Our solutions are environmentally friendly 
                    and tailored to urban and rural settings alike.
                </p>
            </div>
        </div>
    construction;
?>


