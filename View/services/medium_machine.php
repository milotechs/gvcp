
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
echo <<<medium_machine

 <!--=================new======================-->
    <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/heavy-excavator.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                 <h5 class="section-title">Leasing Of Medium Sized Machine</h5>
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
                <img src="{$base}/bg/excavator-digging.jpg" class="img-fluid rounded" alt="Road Construction"><br>
                 <b>Compact Excavators</b>
                <p>
                

                    GVCP’s leasing services extend to compact excavators,
                    which are highly versatile machines suitable for small to 
                    medium-scale construction and utility projects. These excavators 
                    are ideal for digging, trenching, demolition, and other tasks that
                    require precision in limited spaces. We maintain our compact excavators
                    to the highest standards, ensuring durability and dependable performance
                    on every job. By leasing from GVCP, businesses can complete demanding
                    tasks efficiently and affordably,
                    with the added benefit of technical support whenever required.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/forklift.jpg" class="img-fluid rounded" alt="House Building"><br>
                 <b>ForkLifts</b>
                <p>
                    GVCP offers leasing of reliable forklifts to support industries
                    such as warehousing, manufacturing, and logistics. Forklifts are 
                    essential for lifting, stacking, and transporting heavy materials,
                    making them indispensable in fast-paced operations.
                    Our forklifts are regularly maintained to guarantee 
                    safety, fuel efficiency, and smooth performance, helping
                    businesses save time while improving productivity. With
                    flexible leasing terms, companies can access high-quality
                    forklifts without the high cost of ownership or maintenance.

                </p>
            </div>

             <div class = "col-md-4">
                <img src="{$base}/bg/loader.jpg" class="img-fluid rounded" alt="House Building"><br>
                 <b>Loaders</b>
                <p>
                  We also provide loaders for lease, ideal for construction,
                    landscaping, and material handling projects. Loaders are 
                    designed to move bulk materials such as sand, gravel, soil,
                    and debris with ease, reducing manual labor and boosting efficiency 
                    on-site. GVCP ensures that all our loaders are serviced and kept in
                    excellent condition, giving clients confidence that they can rely on
                    the equipment throughout their projects. Our leasing solutions allow
                    businesses to use the right machinery when they need it, without 
                    worrying about long-term investments.

                </p>
            </div>
            
        </div>
        <!--end s here-->
medium_machine;