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


echo <<<leasing_toilets
    <img class="services-main-pic" src="{$base}/bg/toilets.jpg"><br>
    <h5 class="section-title">Leasing of Mobile Toilets</h5>
    <p>
        Milo Tech Services provides reliable and affordable portable sanitation solutions 
        for both short-term and long-term needs. Our mobile toilets are designed to meet 
        the highest standards of hygiene, comfort, and environmental safety. Whether for 
        outdoor events, construction projects, or emergency use, we deliver and maintain 
        units that guarantee user satisfaction and peace of mind.
    </p>

    <!-- Service details with image and description -->
    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/publick toii.jpg" class="img-fluid rounded" alt="Event Mobile Toilets">
        </div>
        <div class="col-md-9">
            <b>Event Mobile Toilets</b>
            <p>
                Perfect for weddings, concerts, festivals, and other outdoor gatherings, 
                our event mobile toilets provide convenience and cleanliness for large crowds. 
                They are easy to set up, accessible, and maintained throughout the event.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/portable-toilets-dry-closets-construction-site.webp" class="img-fluid rounded" alt="Construction Site Toilets">
        </div>
        <div class="col-md-9">
            <b>Construction Site Toilets</b>
            <p>
                Our heavy-duty portable toilets are tailored for construction sites, 
                ensuring that workers have access to clean and durable sanitation facilities 
                even in remote or high-traffic environments.
            </p>
        </div>
    </div>

    <div class="row service-detail mt-4">
        <div class="col-md-3">
            <img src="{$base}/bg/publick toilet.jpeg" class="img-fluid rounded" alt="VIP Toilets">
        </div>
        <div class="col-md-9">
            <b>VIP Toilets</b>
            <p>
                For high-profile events and special occasions, we provide VIP mobile toilets 
                that feature flushing systems, hand-wash stations, mirrors, and enhanced interiors 
                for maximum comfort and luxury.
            </p>
        </div>
    </div>
leasing_toilets;
?>
