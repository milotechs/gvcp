<?php 
// Define the base url
if (!isset($BASE_URL)) {
    $BASE_URL = "/gvcp";
}

echo <<<activebtn
            <style>
                  .{$url[1]}{
                          color: orange;
                          font-weight: bold;
                       }
            </style>
        activebtn;
?>

<div id='home'>
    <div id='hero'>
        <div class='container'>
            <h1><?php echo ucfirst(str_replace('_', ' ', $url[1])); ?> Services</h1> <!-- Dynamic title -->
        </div>
    </div> 
    
    <div class='container'>
        <!-- ... your existing header code ... -->
        
        <section id='services-mini-header'>
            <div class="row">
                <div class="col-md-12" id="services-content">
                    <?php
                    // Load the selected service content
                            if(file_exists("View/services/".$url[1].".php"))
                            {
                              include 'View/services/'.$url[1].".php";
                            }
                            else
                            {
                             echo "404/error_404.php";
                            }
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


$(`a[onclick="servicesLinks(this,<?php echo $url[1]; ?>, '<?php echo $BASE_URL; ?>')"]`).addClass('active-link');</script>;
</script>

<!-- Include your existing services_js.php -->
<script src="<?php echo $BASE_URL; ?>/path/to/services_js.php"></script>
         