<?php 
// Define the base url
if (!isset($BASE_URL)) {
    $BASE_URL = "/gvcp";
}

// Get the service parameter from URL
$service = isset($_GET['service']) ? $_GET['service'] : 'construction';

$serviceFiles = [
    'construction' => 'services/construction.php',
    'line_boring' => 'services/line_boring.php',
    'supply_of_pipes' => 'services/supply_of_pipes.php',
    'leasing_toilets' => 'services/leasing_toilets.php',
    'automotive' => 'services/automotive.php'
];

// Validate the service parameter
if (!array_key_exists($service, $serviceFiles)) {
    $service = 'construction'; // fallback to default
}
?>

<div id='home'>
    <div id='hero'>
        <div class='container'>
            <h1><?php echo ucfirst(str_replace('_', ' ', $service)); ?> Services</h1> <!-- Dynamic title -->
        </div>
    </div> 
    
    <div class='container'>
        <!-- ... your existing header code ... -->
        
        <section id='services-mini-header'>
            <h2 class="section-header">Our Services</h2>
            <hr id='hr'>
            <div class="row">
                <div class="col-md-3">
                    <ul style="list-style: none; padding: 0;">
                        <li><a onclick="servicesLinks(this,'construction','<?php echo $BASE_URL;?>')" <?php echo $service == 'construction' ? 'class="active-link"' : ''; ?>>Construction</a></li>
                        <li><a onclick="servicesLinks(this,'line_boring','<?php echo $BASE_URL;?>')" <?php echo $service == 'line_boring' ? 'class="active-link"' : ''; ?>>Line Boring</a></li>
                        <li><a onclick="servicesLinks(this,'supply_of_pipes','<?php echo $BASE_URL;?>')" <?php echo $service == 'supply_of_pipes' ? 'class="active-link"' : ''; ?>>Supply of Pipes</a></li>
                        <li><a onclick="servicesLinks(this,'leasing_toilets','<?php echo $BASE_URL;?>')" <?php echo $service == 'leasing_toilets' ? 'class="active-link"' : ''; ?>>Leasing of Mobile Toilets</a></li>
                        <li><a onclick="servicesLinks(this,'automotive','<?php echo $BASE_URL;?>')" <?php echo $service == 'automotive' ? 'class="active-link"' : ''; ?>>Automotive Spare Parts</a></li>
                    </ul>
                </div>
                <div class="col-md-9" id="services-content">
                    <?php
                    // Load the selected service content
                    include($serviceFiles[$service]);
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Add this JavaScript to handle initial page load -->
<script>
// Function to load service content on page load
function loadInitialService() {
    // Get service from URL
    const urlParams = new URLSearchParams(window.location.search);
    const service = urlParams.get('service') || 'construction';
    
    // Highlight the active link
    $('.col-md-3 li a').removeClass('active-link');
    $(`a[onclick*="${service}"]`).addClass('active-link');
}

// Call this on page load
$(document).ready(function() {
    loadInitialService();
});
</script>

<!-- Include your existing services_js.php -->
<script src="<?php echo $BASE_URL; ?>/path/to/services_js.php"></script>
         