<script>
    function menuOpenClose(num)
    {
       if(num == 2)
       {
          $('#menu').children('div').css('opacity','0');
          $('#menu_bottom_logo').css('opacity','0');
          setTimeout(function()
          {
            $('#menu').css('width','0px');
          },300);
          $('body').css('overflow','scroll');
       }
       else
       {
          $('#menu').css('width','100%');
          setTimeout(function()
          {
            $('#menu').children('div').css('opacity','1');
            $('#menu_bottom_logo').css('opacity','1');
          },300);
          $('body').css('overflow','hidden');
       }
    }

    function mobileMenuNavigation(page)
    {
      location.href = BASE_URL+"/"+page;
    }


    function serviceDropdown()
    {
       if($('#dp').css('display') == 'none')
       {
          $('#dp-icon').css('transform','rotate(180deg)');
          $('#dp').css('display','block');
          setTimeout( function()
          {
            $('#dp').css({'opacity':'1','top':'25mm'});
          },100);
       }
       else
       {
          $('#dp').css({'opacity':'0','top':'50mm'});
          $('#dp-icon').css('transform','rotate(0deg)');
          setTimeout( function()
          {
            $('#dp').css('display','none');
          },200);
       }
    }
</script>