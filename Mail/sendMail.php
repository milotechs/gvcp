<?php
$decryption_value = openssl_decrypt($_POST['password'],'AES-128-CTR','4%nnGF#',0,$_POST['iv']); 
$msg = '';

if($decryption_value == '***7UTFT%765tguyjhbvjHuyfo((0/67576gv')
{
  if(isset($_POST['medical_condition']))
  {
    $medical_condition = $_POST['medical_condition'];
  }
  else
  {
    $medical_condition = 'No medical condition';
  }

  if(isset($_POST['mname']))
  {
    $middelname = $_POST['mname'];
  }
  else
  {
    $middelname = '';
  }

  $msg = 
     "<!DOCTYPE html>
      <html lang='en'>
        <head>
          <title>Milpark College</title>
          <meta charset='utf-8'>
          <link rel='icon' type='image/x-icon' href='logo.ico'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
          <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
          <script src = 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'></script>
          <link rel='preconnect' href='https://fonts.googleapis.com'>
          <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
          <link href='https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap' rel='stylesheet'>
        </head>
        <style>
            #mail
            {
              width : 50%;
              border : 0.2mm solid lightgray;
              margin : auto;
              margin-top : 10mm;
              margin-bottom : 10mm;
              padding-bottom : 1cm;
              border-radius : 2mm;
            }

            #logo
            {
              background-color : black;
              border-radius : 2mm 2mm 0mm 0mm;
              padding : 5mm 7mm ;
              color : white;
              font-size : 8mm; 
            }

            #logo img
            {
            width : 100px;
            height : auto;
            }

            #logo hr
            {
              background-color : lightblue;
            }

            #label
            {
              text-align : ;
            }

            td
            {
              padding : 2mm 5mm;
              width : 50%;
              border-top : rgb(230,230,230) solid 0.2mm;
              border-bottom : rgb(230,230,230) solid 0.2mm;
            }

            h1
            {
              margin-bottom : 6mm;
              font-size : 6mm;
            }

            #applicant_details
            {
              padding : 7mm 7mm 5mm;
            }

            table
            {
              width : 100%;
            }
          
        </style>
        <body >
            <div id = 'mail' align = 'left'>
                <div id = 'logo'>
                  <img src = 'https://milparkcollege.ac.zm/Icons/email_logo.png'>
                  <hr>
                </div>
                <div id = 'applicant_details'>
                <h1>Applicant's information</h1>
                <table>
                    <tr>
                      <td id = 'label'><b>Name :</b></td>  
                      <td id = 'value'>".$_POST['fname']." ".$middelname." ".$_POST['lname']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Gender :</b></td>  
                      <td id = 'value'>".$_POST['gender']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Date of birth :</b></td>  
                      <td id = 'value'>".$_POST['birthday']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Nationality :</b></td>  
                      <td id = 'value'>".$_POST['nationality']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Marital status :</b></td>  
                      <td id = 'value'>".$_POST['marital_status']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>".$_POST['ID_type']." number :</b></td>  
                      <td id = 'value'>".$_POST['ID']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Medical condition :</b></td>  
                      <td id = 'value'>".$medical_condition."</td>           
                  </tr>

                  <tr>
                      <td id = 'label'><b>Program bieng allpied for :</b></td>  
                      <td id = 'value'>".$_POST['program']."</td>           
                  </tr>

                  <tr>
                      <td id = 'label'><b>Academic :</b></td>  
                      <td id = 'value'>".$_POST['academic_year']."</td>           
                  </tr>

                  <tr>
                      <td id = 'label'><b>In take :</b></td>  
                      <td id = 'value'>".$_POST['in_take']."</td>           
                  </tr>
                </table>
                <br><br><br>
                <h1>Applicant's Contact Details</h1>
                <table>
                    <tr>
                      <td id = 'label'><b>Phone number :</b></td>  
                      <td id = 'value'>".$_POST['phonenumber']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Email address :</b></td>  
                      <td id = 'value'>".$_POST['email']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Street name :</b></td>  
                      <td id = 'value'>".$_POST['street_name']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Town :</b></td>  
                      <td id = 'value'>".$_POST['town']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Province/State :</b></td>  
                      <td id = 'value'>".$_POST['province_state']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Postal sddrees :</b></td>  
                      <td id = 'value'>".$_POST['postal_address']."</td>           
                  </tr>
                </table>
                <br><br><br>
                <h1>Next of Kin/Sponsor Details</h1>
                <table>
                    <tr>
                      <td id = 'label'><b>Name :</b></td>  
                      <td id = 'value'>".$_POST['first_name_kin']." ".$_POST['last_name_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Phone number :</b></td>  
                      <td id = 'value'>".$_POST['phone_number_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Email address :</b></td>  
                      <td id = 'value'>".$_POST['email_address_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>House number :</b></td>  
                      <td id = 'value'>".$_POST['house_number_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Town :</b></td>  
                      <td id = 'value'>".$_POST['town_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Province/State :</b></td>  
                      <td id = 'value'>".$_POST['province_state_kin']."</td>           
                  </tr>
                  <tr>
                      <td id = 'label'><b>Nationality :</b></td>  
                      <td id = 'value'>".$_POST['nationality_kin']."</td>           
                  </tr>
                </table>
                </div>
            </div>
        </body>
      </html>";
  }

  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

  require 'PHPMailer.php';
  require 'Exception.php';
  require 'SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {

  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'applications@milparkcollege.ac.zm';                     //SMTP username
  $mail->Password   = '!Applications24';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients

    $mail->setFrom('applications@milparkcollege.ac.zm',$_POST['fname']." ".$_POST['lname']);
    $mail->addAddress('info@milparkcollege.ac.zm','admissions');
    $mail->addAddress('misheckmbewe@gmail.com','Milpark College');     //Add a recipient
    //$mail->addReplyTo('misheckmbewe@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('../../Icons/logo.png');         //Add attachments
    //$mail->addAttachment('logo.png', 'logo2');    //Optional name
    //$mail->addEmbeddedImage('logo.png','logo');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Application';
    $mail->Body = $msg;
    
    $mail->send();
    echo 'sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


?>