<div id = 'mobile-header'>
  <div id = 'mobile-header-container'>
    <div id = 'mobile-logo'>
       <img src = '<?php $BASE_URL;?>Icons/logo.png'>
    </div>
    <div id = 'mobile-navi' align = 'right'>
       <img src = '<?php $BASE_URL;?>Icons/burg_menu.png' onclick="menuOpenClose(1)">
    </div>
  </div>
</div>

<div id = 'menu'>
    <div id = 'menu_header'>
        <div id = 'menu-label'>
            <span>Menu</span>
        </div>
        <div align = 'right'>
            <span onclick = "menuOpenClose(2)">X</span>
        </div>
    </div>
    <div id = 'menu_links'>
        <div id = 'link' onclick = "mobileMenuNavigation('home')">Home</div>
        <div id = 'link' onclick = "mobileMenuNavigation('about')">About</div>
        <div id = 'link' onclick = "mobileMenuNavigation('services/construction')">Services</div>
        <div id = 'link' onclick = "mobileMenuNavigation('careers')">Careers</div>
        <div id = 'link' onclick = "mobileMenuNavigation('#contacts')">Contacts</div>
    </div>
    <img src = '<?php echo $BASE_URL;?>/Icons/logo.png' id = 'menu_bottom_logo'>
</div>


