<?php
   echo <<<construction
        <img class="services-main-pic" src="{$_GET['BASE_URL']}/bg/construction.jpg"><br>
        <h5 class="section-title">Construction Services</h5>
        <p>
            At Milo Tech Services, we provide comprehensive and professional construction services 
            that cover every stage of development — from design to completion. Our expertise spans 
            across building works, civil engineering projects, and specialized infrastructure. 
            With a highly skilled team and access to modern equipment, we guarantee timely delivery, 
            cost efficiency, and strict adherence to the highest quality and safety standards. 
            Whether you are planning large-scale infrastructure or residential projects, 
            we are your trusted partner for sustainable and durable construction solutions.
        </p>

        <!-- Service details with image and description -->
        <div class="row service-detail mt-4">
            <div class="col-md-3">
                <img src="{$_GET['BASE_URL']}/bg/contact.png" class="img-fluid rounded" alt="Road Construction">
            </div>
            <div class="col-md-6">
                <h6>Road Construction</h6>
                <p>
                    We design and build modern roads that enhance connectivity and economic growth. 
                    From highways to rural access roads, our work ensures durability, smooth traffic flow, 
                    and compliance with national construction standards.
                </p>
            </div>
        </div>

        <div class="row service-detail mt-4">
            <div class="col-md-3">
                <img src="{$_GET['BASE_URL']}/bg/contact.png" class="img-fluid rounded" alt="House Building">
            </div>
            <div class="col-md-6">
                <h6>House Building</h6>
                <p>
                    Our residential construction services bring your dream home to life. 
                    We handle everything from foundation to finishing, combining modern design 
                    with quality craftsmanship for safe, comfortable, and beautiful living spaces.
                </p>
            </div>
        </div>

        <div class="row service-detail mt-4">
            <div class="col-md-3">
                <img src="{$_GET['BASE_URL']}/bg/contact.png" class="img-fluid rounded" alt="Drainage Development">
            </div>
            <div class="col-md-6">
                <h6>Drainage Development</h6>
                <p>
                    We construct effective drainage systems that protect communities and infrastructure 
                    from flooding and water damage. Our solutions are environmentally friendly 
                    and tailored to urban and rural settings alike.
                </p>
            </div>
        </div>
    construction;
?>


