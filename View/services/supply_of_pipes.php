
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

 <!--=================new======================-->
    <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/pipes.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                 <h5 class="section-title">Leasing of Mobile Toilets</h5>
                <p>
                    GVCP Services provides a wide range of durable, industry-standard pipes 
                    designed for multiple applications. Whether for water supply, drainage systems, 
                    or construction projects, our pipes are sourced from trusted manufacturers 
                    to ensure reliability, efficiency, and compliance with both national and 
                    international standards. With us, customers receive products that deliver 
                    long-lasting performance and value.
                </p>
            </div>
            <div class = "col-md-12">
                <br>
                <hr id='hr'>
                <br>
            </div>
            <!-- Service details with image and description -->
            <div class = "col-md-4">
                <img src="{$base}/bg/water pipe.png" class="img-fluid rounded" alt="Road Construction"><br>
                 <b>Water Supply Pipes</b>
                <p>
                     We supply high-quality water pipes suitable for residential, commercial, 
                     and industrial water distribution systems. Our pipes are designed to 
                     withstand pressure, ensuring leak-free and efficient water delivery.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/drainagepipe.jpeg" class="img-fluid rounded" alt="House Building"><br>
                 <b>Drainage Pipes</b>
                <p>
                  Our drainage pipes are built for durability and efficiency, making them 
                ideal for stormwater management and sewage systems. They are resistant 
                to corrosion, ensuring long-term performance in challenging conditions.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/insudtair pipe.jpg" class="img-fluid rounded" alt="Drainage Development"><br>
                      <b>Construction & Industrial Pipes</b>
                <p>
                     For construction projects and industrial use, we provide heavy-duty pipes 
                that meet strict engineering standards. These are suitable for large-scale 
                infrastructure, ensuring strength, safety, and long service life.
                </p>
            </div>
        </div>
        <!--end s here-->
supply_of_pipes;
?>
