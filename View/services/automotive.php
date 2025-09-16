<?php
//get BASE_URL from eithr the global or GRET pararmeter
if (isset($BASE_URL)){
    $base = $BASE_URL;
} elseif (isset($_GEt['BASE_URL'])){
    $base = $_GET['BASE_URL'];
} else{
    $base = "/gvcp"; //fallback
}
echo <<<automotive
    
     <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/automotive.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                 <h5 class="section-title">Automotive Spare Parts</h5>
                <p>
                    GVCP Services, we supply a wide range of genuine and durable automotive spare parts 
                    designed to keep vehicles running smoothly, efficiently, and safely. From engines and 
                    transmissions to brakes, suspensions, and accessories, we ensure top-quality products 
                    at competitive prices. Our parts are sourced from trusted manufacturers, giving 
                    customers the assurance of reliability, reduced downtime, and confidence on the road.
                </p>
            </div>
            <div class = "col-md-12">
                <br>
                <hr id='hr'>
                <br>
            </div>
            <!-- Service details with image and description -->
            <div class = "col-md-4">
                <img src="{$base}/bg/spare parts.jpg" class="img-fluid rounded" alt="Road Construction"><br>
                <b>Engine & Transmission Parts</b>
                <p>
                     We stock high-performance engine and transmission components, ensuring vehicles 
                deliver maximum power, fuel efficiency, and durability. From gaskets to gearboxes, 
                our parts are tested and guaranteed to perform.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/brake.jpg" class="img-fluid rounded" alt="House Building"><br>
                 <b>Brake Systems & Suspension</b>
                <p>
                   Safety comes first, and our brake and suspension systems provide reliability on every journey. 
                We offer pads, discs, shock absorbers, and more, all manufactured to meet international standards.
                </p>
            </div>
            <div class = "col-md-4">
                <img src="{$base}/bg/accesories.jpg" class="img-fluid rounded" alt="Drainage Development"><br>
                     <b>Automotive Accessories</b>
                <p>
                  From batteries and lighting to mirrors, seat covers, and wipers, 
                we provide a variety of accessories that enhance both performance and comfort 
                for vehicle owners and fleet operators.
                </p>
            </div>
        </div>
automotive;
?>
