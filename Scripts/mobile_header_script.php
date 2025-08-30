<script>
  function menuOpenClose(num)
  {
     if(num == 2)
     {
       $('#menu, #blur').css('width','0px');
       $('').css('width','0px');
       $('#menu_header, #menu_links, #menu_bottom_logo').fadeOut(80);
       $('body').css('overflow','scroll');
     }
     else
     {
       $('#menu, #blur').css('width','100%');
       $('#menu_header, #menu_links, #menu_bottom_logo').fadeIn(200);
       $('body').css('overflow','hidden');
     }
  } 

  function mobileMenuNavigation(url)
     {
       //alert('yes')
       menuOpenClose(2)
       setTimeout(function()
        {
         location.href = url;
        },200);
     }
</script>