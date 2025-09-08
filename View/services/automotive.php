<?php
echo <<<automotive
    <img class="services-main-pic" src="{$_GET['BASE_URL']}/bg/automotive.jpg"><br>
    <h5 class="section-title">Automotive Spare Parts</h5>
    <p>
        At Milo Tech Services, we supply a wide range of genuine and durable automotive spare parts 
        designed to keep vehicles running smoothly, efficiently, and safely. From engines and 
        transmissions to brakes, suspensions, and accessories, we ensure top-quality products 
        at competitive prices. Our parts are sourced from trusted manufacturers, giving 
        customers the assurance of reliability, reduced downtime, and confidence on the road.
    </p>

    <!-- Service details with image and description -->
    <div class="row service-detail mt-6">
        <div class="col-md-3">
            <img src="{$_GET['BASE_URL']}/bg/services.jpg" class="img-fluid rounded" alt="Engine & Transmission Parts">
        </div>
        <div class="col-md-4">
            <h6>Engine & Transmission Parts</h6>
            <p>
                We stock high-performance engine and transmission components, ensuring vehicles 
                deliver maximum power, fuel efficiency, and durability. From gaskets to gearboxes, 
                our parts are tested and guaranteed to perform.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$_GET['BASE_URL']}/bg/services.jpg" class="img-fluid rounded" alt="Brake Systems & Suspension">
        </div>
        <div class="col-md-6">
            <h6>Brake Systems & Suspension</h6>
            <p>
                Safety comes first, and our brake and suspension systems provide reliability on every journey. 
                We offer pads, discs, shock absorbers, and more, all manufactured to meet international standards.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-6">
        <div class="col-md-3">
            <img src="{$_GET['BASE_URL']}/bg/services.jpg" class="img-fluid rounded" alt="Automotive Accessories">
        </div>
        <div class="col-md-4">
            <h6>Automotive Accessories</h6>
            <p>
                From batteries and lighting to mirrors, seat covers, and wipers, 
                we provide a variety of accessories that enhance both performance and comfort 
                for vehicle owners and fleet operators.
            </p>
        </div>
    </div>
automotive;
?>
