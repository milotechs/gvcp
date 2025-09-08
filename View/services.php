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
                        <li> <a href="<?php echo $BASE_URL;?>/services/construction" >Construction </a></li>
                        <li><a href="<?php echo $BASE_URL;?>/services/line_boring"> Line Boring</a> </li>
                        <li> <a href="<?php echo $BASE_URL;?>/services/supply_of_pipes">Supply of Pipes</a></li>
                        <li> <a href="<?php echo $BASE_URL;?>/services/leasing_toilets" >Leasing of Mobile Toilets</a></li>
                        <li> <a href="<?php echo $BASE_URL;?>/services/automotive" >Automotive Spare Parts</a></li>
                    
                </div>
                <div class="col-md-9">
                <?php
                if(file_exists("View/services/".$url[1].".php"))
                    {
                        
                        include 'View/services/'.$url[1].".php";
                        
                    }
                    else
                    {
                
                    }
                ?>
            </div>
            </div>
         </section>
         