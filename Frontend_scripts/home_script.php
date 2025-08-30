<script>
    function validateEmail(email)
    {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(re.test($(email).val()))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    function scrolle()
    {
      if(scrollY > 400)
      {
        $('#header').css({'background-color':'white','position':'fixed','box-shadow' : '2px 4px 10px 2px rgb(0,0,0,0.2)'});
        $('#navi #link').css('color','black');
        $('#logo img').css('opacity','1');
      }
      else
      {
        $('#header').css({'background-color':'rgb(1,1,1,0)','position':'absolute','box-shadow' : '2px 3px 10px 2px rgb(0,0,0,0)'});
        $('#navi #link').css('color','white');
        $('#logo img').css('opacity','0');
      }
    }

    function openCloseCourses(pic,container)
    {
      if($(container).css('display') == 'none')
      {
        $(container).slideDown();
        $(pic).css('transform','rotate(180deg)');
      }
      else
      {
        $(container).slideUp();
        $(pic).css('transform','rotate(0deg)');
      }
    }

  function showAnalysis()
  {
     if($('#stats_section').css('display') == 'none')
     {
       $('#stats_section').slideDown();
       $('#show_analysis img').attr("src",'<?php echo router::BASE_URL;?>Icons/minus.png');

        countNumb = setInterval(function(){
                if($('#stats_number_1').text() != '98')
                {
                  num = Number($('#stats_number_1').text()) ;
                  sum = num + 1;
                  $('#stats_number_1').text(sum+"")
                }

                if($('#stats_number_2').text() != '125')
                {
                  num = Number($('#stats_number_2').text()) ;
                  sum = num + 1;
                  $('#stats_number_2').text(sum+"")
                }

                if($('#stats_number_3').text() != '30')
                {
                  num = Number($('#stats_number_3').text()) ;
                  sum = num + 1;
                  $('#stats_number_3').text(sum+"")
                }

                if($('#total_number').text() != '223')
                {
                  num = Number($('#total_number').text()) ;
                  sum = num + 1;
                  $('#total_number').text(sum+"")
                }
                else
                {
                  clearInterval(countNumb);
                }
        },20);
     } 
     else
     { 
       $('#stats_section').slideUp(100);
       $('#show_analysis img').attr("src",'<?php echo router::BASE_URL;?>Icons/plus.png');
       $('#total_number, #stats_number_1,#stats_number_2,#stats_number_3').text("0");
     }


  }



</script>