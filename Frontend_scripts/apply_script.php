<script>
function checkBox(answer,answer2,num)
{
   if($(answer).attr('src') == 'Icons/unticked.png')
   {
        $(answer).attr('src','Icons/tick.png');
        $(answer2).attr('src','Icons/unticked.png');
   }

   if(num == 2)
   {
        if(answer == '#yes_pic')
        {
            $('#medical_condition').prop('disabled',false);
        }
        else
        {
            $('#medical_condition').val('');
            $('#medical_condition').prop('disabled',true);
        }
   }

   else
   {
      if(answer == '#nrc')
      {
        $('#ID').val('')
                .prop('placeholder','NRC Format e.g 123456/34/1')
                .prop('maxlength','11');

         $('#ID_type').val('N.R.C');
      }
      else
      {
        $('#ID').val('')
                .prop('placeholder','Passport number')
                .prop('maxlength','9');
        $('#ID_type').val('Passport');
      }
   }
}


function applyFormValidation()
{
    nrcFormat = /^[0-9]{6}\/+[0-9]{2}\/+[0-9]{1}/;
    passportFormat = /^([0-9A-Z])/;
    email_pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    special_characters = /[-!$%^&*()_+|~=`{}\[\]:\/;<>?,.@#]/;
    invalidity = 0;

    if($('#fname').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your first name</li>');
        invalidity = invalidity + 1;
    }

    if($('#lname').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your last name</li>');
        invalidity = invalidity + 1;
    }

    if($('#birthday').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your birthday</li>');
        invalidity = invalidity + 1;
    }

      // medical condition ------------------------------------ 
      if($('#yes_pic').attr('src') == '/Icons/tick.png')
    {
        if($('#medical_condition').val() == '')
        {
            $('#apply_alert ul').append('<li>Explian your medical condition</li>');
            invalidity = invalidity + 1;
        }
    }

    if($('#phonenumber').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your phone number</li>');
        invalidity = invalidity + 1;
    }
    else if($('#phonenumber').val().length < 9)
    {
        $('#apply_alert ul').append('<li>Your phone number is invalid</li>');
        invalidity = invalidity + 1;
    }

    // applicant's email validation
    if($('#email').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your email address</li>');
        invalidity = invalidity + 1;
    }
    else if(email_pattern.test($('#email').val()) == false)
    {
        $('#apply_alert ul').append('<li>Enter a valid email address</li>');
        invalidity = invalidity + 1;
    }

    if($('#house_number').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your houses number</li>');
        invalidity = invalidity + 1;
    }

    if($('#street_name').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter a your house number</li>');
        invalidity = invalidity + 1;
    }

    if($('#town').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter name of town</li>');
        invalidity = invalidity + 1;
    }

    if($('#province_state').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter province/state</li>');
        invalidity = invalidity + 1;
    }

    if($('#postal_address').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter postal address</li>');
        invalidity = invalidity + 1;
    }

    // next of kin's section validation -------------------------------------------
    if($('#first_name_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter your next of kin's first name</li>");
        invalidity = invalidity + 1;
    }

    if($('#last_name_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter your next of kin's last name</li>");
        invalidity = invalidity + 1;
    }

    // next of kin's phone number validation    // next of kin's phone number validation
    if($('#phone_number_kin').val() == '')
    {
        $('#apply_alert ul').append('<li>Enter your phone number</li>');
        invalidity = invalidity + 1;
    }
    else if($('#phone_number_kin').val().length < 9)
    {
        $('#apply_alert ul').append('<li>Your phone number is invalid</li>');
        invalidity = invalidity + 1;
    }

      // next of kin's email validation
    if($('#email_address_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter your next of kin's email address</li>");
        invalidity = invalidity + 1;
    }
    else if(email_pattern.test($('#email_address_kin').val()) == false)
    {
        $('#apply_alert ul').append("<li>Enter a valid email address for your next of kin</li>");
        invalidity = invalidity + 1;
    }

    if($('#house_number_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter next of kin's house number</li>");
        invalidity = invalidity + 1;
    }

    if($('#street_name_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter next of kin's street name</li>");
        invalidity = invalidity + 1;
    }

    if($('#town_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter next of kin's Town</li>");
        invalidity = invalidity + 1;
    }

    if($('#province_state_kin').val() == '')
    {
        $('#apply_alert ul').append("<li>Enter next of kin's Province/State</li>");
        invalidity = invalidity + 1;
    }
     if($('#grede_12').val() == '')
    {
        $('#apply_alert ul').append("<li>Attach secondary school certificate/statement of results</li>");
        invalidity = invalidity + 1;
    }


    // N.R.C/Passport validation  ------------------------------------ 
    if($('#nrc').attr('src') == 'Icons/tick.png')
    {
        if($('#ID').val() == '')
        {
            $('#apply_alert ul').append('<li>Enter your NRC</li>');
            invalidity = invalidity + 1;
            }
            else if(nrcFormat.test($('#ID').val()) == false)
            {
            $('#apply_alert ul').append('<li>NRC number does not match the required format</li>');
            invalidity = invalidity + 1;
        }
    }
    else
    {
        if($('#ID').val() == '')
        {
        $('#apply_alert ul').append('<li>Enter your passport number</li>');
        invalidity = invalidity + 1;
        }
        else if(special_characters.test($('#ID').val()) == true)
        {
        $('#apply_alert ul').append('<li> A passport number does not have special characters</li>');
        invalidity = invalidity + 1;
        }
    }

    if(invalidity > 0)
    {
      $('#apply_alert').slideDown(150);
      location.href = '#apply_alert';
      $('#apply_btn').attr('onclick','');
    }
    else
    {
        apply();
        $('#application_status').fadeIn(600);
        setTimeout(() => {
           $('#loading').fadeIn(200);
        },1000);
    }

}  

  
 
// phone niumber validation 
function numbersOnly(e)
{
    var x = e.which;
    if(x >= 48 && x <= 57)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function phoneNumberFocus(number)
{
    if(number.value == "")
    {
        number.value = '+';
    }
}

function plusSign(number)
{
    if(number.value.length == 0)
    {
    number.value = '+';
    }
}

$('input, select, #checkbox').click(function()
{
    $('#apply_alert').slideUp(150);
    $('#apply_alert ul').empty();
    $('#apply_btn').attr('onclick','applyFormValidation()');
});

function apply()
{
    var form = new FormData($('#apply_form')[0]);
    $.ajax({
             url : '/Mail/sendMail.php',
             method : 'post',
             processData : false,
             contentType: false,
             data : form,
             success:function(data)
             {
    
                 $('#success_failed h1').text("Hi, "+$('#fname').val()+" "+$('#lname').val());

                 if(data == 'sent')
                 {
                   $('#success_failed img').attr('src','Icons/tick.png');
                   $('#status_msg').text('Your form has been sent');
                 }
                 else
                 {
                   $('#success_failed img').attr('src','Icons/email_error.png');
                   $('#status_msg').html('Your form has not been sent<br>Check your internet connection or the status of your email address');
                 }

                 $('#loading').fadeOut(1);
                 $('#success_failed').fadeIn(1000);
             }
           });
}

function checkExt(file)
{
  ext = file.value.split('.');
  if(ext[ext.length - 1] != 'pdf')
  {
     $('.check_ext_alert').text('Only PDF files allowed !').css('color','tomato');
     file.value = '';
     setTimeout(() => {
        $('.check_ext_alert').text('Attach secondary school certificate/statement of results').css('color','black');
     }, 3000);
  }
}


</script>