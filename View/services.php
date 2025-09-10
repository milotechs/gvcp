<?php 

$service = isset($_GET['service']) ? $_GET['service'] : 'construction';

$serviceFiles = [
    'construction' => 'services/construction.php',
    'line_boring' => 'services/line_boring.php',
    'supply_of_pipes' => 'services/supply_of_pipes.php',
    'leasing_toilets' => 'services/leasing_toilets.php',
    'automotive' => 'services/automotive.php'
];

if (array_key_exists($service, $serviceFiles)) {
    include($serviceFiles[$service]);
} else {
    include($serviceFiles['construction']);
}
?>
<!-- ...existing HTML code below... -->
?>

<div id = 'home'>
    <div id = 'hero'>
        <div class = 'container'>
            <h1>Construction</h1>
        </div>
    </div> 
    <div class = 'container'>
        <div class = 'row'>
            <div class = 'col-md-6'>
                    <div id =  'title'>
                        <h1 class="section-title">Our Services</h1>
                        
                        <p>
                            
                        </p>
                        <div id = 'header-socials'>
                            <a href = '#about' align = 'left'>
                              <img src = '<?php echo $BASE_URL;?>/Icons/fb-black.png'>
                            </a>
                            <a>
                              <img src = '<?php echo $BASE_URL;?>/Icons/in-black.png'>
                            </a>
                            <a>
                              <img src = '<?php echo $BASE_URL;?>/Icons/gram-black.png'>
                            </a>
                       </div>
                    </div>
            </div>  
       </div>  
         <!--section of mini header in services-->
         <section id = 'services-mini-header'>
            <h2 class="section-header">Our Services</h2>
            <hr id = 'hr'>
            <div class="row">
                <div class="col-md-3">
                        <li> <a onclick="servicesLinks(this,'construction','<?php echo $BASE_URL;?>')">Construction </a></li>
                        <li><a onclick=" servicesLinks(this,'line_boring','<?php echo $BASE_URL;?>')"> Line Boring</a> </li>
                        <li> <a onclick="servicesLinks(this,'supply_of_pipes', '<?php echo $BASE_URL;?>')" >Supply of Pipes</a></li>
                        <li> <a onclick=" servicesLinks(this,'leasing_toilets', '<?php echo $BASE_URL;?>')">Leasing of Mobile Toilets</a></li>
                        <li> <a onclick=" servicesLinks(this,'automotive', '<?php echo $BASE_URL;?>')">Automotive Spare Parts</a></li>
                    
                </div>
                <div class="col-md-9" id="services-content">
                            
                                <img class="services-main-pic" src = '<?php echo $BASE_URL;?>/bg/construction.jpg'><br>
                                <h5 class="section-title">Construction Services</h5>
                                <p>
                                    We provide professional construction services, ranging from 
                                    building works to civil engineering projects. With a team of 
                                    skilled experts and access to modern tools and equipment, we 
                                    deliver projects on time, within budget, and to the highest 
                                    quality and safety standards.
                                </p>
                             
                </div>
            </div>
         </section>
         