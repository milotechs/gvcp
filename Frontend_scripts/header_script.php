<script>
   function closeOpenMenu(num)
   {
      if(num == 1)
      {
         $('#menu').css('width','100%');
         $('#menu_close_label').css('opacity','1');
         $('#links,#mobile_menu_logo').fadeIn(500);
         $('body').css('overflow','hidden');
      }
      else
      { 
         $('#links,#mobile_menu_logo').fadeOut(10);
         $('#menu_close_label').css('opacity','0');
         $('#menu').css('width','0px');
         $('body').css('overflow','scroll');
      }
      
      $('#links div').click(function()
      {
           closeOpenMenu(2);  
      });
   }
</script>