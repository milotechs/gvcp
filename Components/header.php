<header>
    <div id = 'header-container'>
        <div id = 'logo'>
            <img src = '<?php echo $BASE_URL;?>/Icons/logo.png'>
        </div>
        <div id = 'navi' align = 'center'>
            <a href = '#about'>
                 Home
                <div id = 'line'></div>
            </a>
            <a href = '#about'>
                About
                <div id = 'line'></div>
            </a>
            <a onclick="serviceDropdown()">
                Services <img src = '<?php echo $BASE_URL;?>/Icons/dp.png' id = 'dp-icon'>
            </a>
            <a href = '#contacts'>
                 Careers
                <div id = 'line'></div>
            </a>
            <a href = '#contacts'>
                Contacts
                <div id = 'line'></div>
            </a>
        </div>
    </div>
    <div id = 'dp'>
        <div class = 'row'>
             <div class = 'col-md-6'>
                <a href = '<?php echo $BASE_URL; ?>/services/construction' id = 'dp-service-container'>
                    <div class = 'row'>
                        <div class = 'col-md-4'>
                            <img src = '<?php echo $BASE_URL;?>/bg/construction.jpg'>
                        </div>
                        <div class = 'col-md-8'>
                            <b>Construction</b><br>
                                <span>
                                    <?php echo substr("GVCP provides a wide range of construction",0,50); ?> ....
                                </span>
                             <hr>
                        </div> 
                    </div>
                </a>
             </div>
            <div class = 'col-md-6'>
                <div id = 'dp-service-container'>
                    <div class = 'row'>
                        <div class = 'col-md-4'>
                            <img src = '<?php echo $BASE_URL;?>/bg/pipes.jpg'>
                        </div>
                        <div class = 'col-md-8'>
                            <b>Supply of Pipes</b><br>
                            <span>
                                 <?php echo substr("We supply durable and industry-standard",0,50); ?> ....
                            </span>
                            <hr>
                        </div> 
                    </div>
                 </div>
             </div>
             <div class = 'col-md-6'>
                <div id = 'dp-service-container'>
                    <div class = 'row'>
                        <div class = 'col-md-4'>
                            <img src = '<?php echo $BASE_URL;?>/bg/line-boring.jpg'>
                        </div>
                        <div class = 'col-md-8'>
                            <b>Line Boring</b><br>
                            <span>
                                 <?php echo substr("We offer on-site line boring to repair worn or misaligned",0,50); ?> ....
                            </span>
                            <hr>
                        </div> 
                    </div>
                 </div>
             </div>
            <div class = 'col-md-6'>
                <div id = 'dp-service-container'>
                    <div class = 'row'>
                        <div class = 'col-md-4'>
                            <img src = '<?php echo $BASE_URL;?>/bg/repair.jpg'>
                        </div>
                        <div class = 'col-md-8'>
                            <b>Automotive Repair</b><br>
                            <span>
                                 <?php echo substr("We offer on-site line boring to repair worn or misaligned",0,50); ?> ....
                            </span>
                            <hr>
                        </div> 
                    </div>
                 </div>
             </div>
            <div class = 'col-md-6'>
                <div id = 'dp-service-container'>
                    <div class = 'row'>
                        <div class = 'col-md-4'>
                            <img src = '<?php echo $BASE_URL;?>/bg/repair.jpg'>
                        </div>
                        <div class = 'col-md-8'>
                            <b>Mobile Toilets</b><br>
                            <span>
                                 <?php echo substr("We offer on-site line boring to repair worn or misaligned",0,50); ?> ....
                            </span>
                            <hr>
                        </div> 
                    </div>
                 </div>
             </div>
        </div>
    </div>
</header>
   

