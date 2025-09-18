
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
echo <<<busing_service

 <!--=================new======================-->
    <div class = 'row'>
            <div class = 'col-md-6'>
              <img class="services-main-pic" src="{$base}/bg/bus.jpg"><br>
            </div>
            <div class = 'col-md-6'>
                 <h5 class="section-title">Busing Services</h5>
                <p>
                    At GVCP, we are committed to providing safe, reliable, and 
                    efficient bussing services tailored to meet the diverse 
                    transportation needs of our clients. Whether it is for schools, 
                    companies, events, or community activities, we ensure that people are 
                    transported comfortably and on time. Our fleet of well-maintained buses
                    is operated by professional and experienced drivers who prioritize 
                    passenger safety and customer satisfaction. GVCP takes pride in offering
                    flexible transport solutions—ranging from daily staff transportation to 
                    special event shuttles—while maintaining the highest standards of service.

                </p>
            </div>
            <div class = "col-md-12">
                <br>
                <hr id='hr'>
                <br>
            </div>
            <!-- Service details with image and description -->
            <div class = "col-md-6">
                <img src="{$base}/bg/male-bus-driver-portrait.jpg" class="img-fluid rounded" alt="Road Construction"><br>
                 <b>School Busing Service</b>
                <p>
                        GVCP provides reliable and safe transportation solutions for 
                        schools, ensuring that learners are picked up and dropped off 
                        on time every day. Our school bussing service is designed to 
                        give parents and institutions peace of mind by guaranteeing 
                        comfort, punctuality, and safety for every child. With experienced 
                        drivers, well-maintained buses, and strict adherence to traffic 
                        regulations, GVCP helps schools focus on education while we take 
                        care of the transportation needs.

                </p>
            </div>
            <div class = "col-md-6">
                <img src="{$base}/bg/driver.jpg" class="img-fluid rounded" alt="House Building"><br>
                 <b>Event Busing service</b>
                <p>
                    GVCP also offers tailored bussing services for events such as 
                    conferences, weddings, church gatherings, sports activities, and 
                    corporate functions. We understand that events require efficient
                     coordination, and our team ensures that groups of all sizes 
                     are transported smoothly and on schedule. Our event transportation
                    is flexible, affordable, and dependable, making it easier for
                     organizers to move guests and participants without hassle. With GVCP, 
                    every event journey is managed with professionalism and care.
                </p>
            </div>
            
        </div>
        <!--end s here-->
busing_service;
?>