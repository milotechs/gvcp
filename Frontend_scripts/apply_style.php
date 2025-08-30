<style>
  #application_form input[type = 'text'],
  #application_form input[type = 'date'],
  #application_form input[type = 'email'],
  #application_form input[type = 'tel']
  {
    width : 100%;
    border-radius : 1mm;
    border : rgb(200,200,200) solid 0.2mm;
    font-size : 4.5mm;
    padding : 2mm 3mm;
    outline : none;
    margin : 1mm 0mm 5mm;
  }

  #application_form input[type = 'checkbox']
  {
    margin-bottom : 5mm;
    margin-right : 1.5mm;
  }


  #lname,
  #fname,
  #nationality,
  #nationality,
  #first_name_kin,
  #last_name_kin,
  #street_name_kin
  #town, #town_kin,
  #province_state,
  #province_state_kin,
  #street_name, #street_name_kin
  {
    text-transform : capitalize;
  }

  #ID
  {
    text-transform : uppercase;
  }

  label
  {
    cursor: pointer; 
  }


  #application_form select
  {
    width : 100%;
    padding : 2.3mm 3mm;
    font-size : 5mm;
    margin : 1mm 0mm 5mm;
    outline : none;
    border : rgb(200,200,200) solid 0.2mm;
    background-color : white;
    border-radius : 1mm;
  }

  #application_form  h1
  { 
    font-size : 2vw;
    font-weight : 200; 
    padding : 0mm 10mm 5mm;
    color : black; 
    border-radius : 5mm; 
    z-index :0;
  }

  textarea
  {
    width : 100%;
    border : rgb(200,200,200) solid 0.2mm;
    border-radius : 2mm;
    min-height : 5cm;
    padding : 5mm;
    margin-bottom : 5mm;
    outline : none;
  }

  #medical_condition_section
  {
    background-color : rgb(200,200,200);
  }

  #label
  {
    color : rgb(10,10,70);
    padding : 0mm 3mm;
    font-weight : 300;
  }

  #apply_alert
  {
    background-color : rgb(200,10,50,0.1);
    color : white;
    padding : 10mm 5mm;
    font-size : 5mm;
    font-weight : 300;
    color : rgb(200,10,50);
    border-radius : 2mm;
    display : none;
  }


  #application_form_section
  {
    border-radius : 2mm;
    background-color : rgb(255,255,255);
    padding : 15mm 10mm ;
    margin-bottom : 2cm;
    border: 0.2mm solid rgb(0,0,0,0.12);
    box-shadow : 2px 6px 10px 2px rgb(0,0,0,0.1);
  }

  ::placeholder
  {
     font-weight : 200;
     color : rgb(150,150,150); 
  }

  #application_form button
  {
    width : 70%;
    border : none;
    background-color : rgb(20,200,20);
    padding : 2.5mm;
    margin-bottom : 1.5cm;
    border-radius : 10mm;
    box-shadow : 2px 5px 10px 2px rgb(0,0,0,0.2);
  }

  #apply #bg_home
  {
     background-image : url('/bg/apply.jpg');
     background-size : cover;
  }

  #checkbox img
  {
     width : 30px;
  }

  #checkbox 
  {
    display : flex;
  }

  #checkbox div:nth-child(2)
  {
    margin-left : 3mm;
  }

  #checkbox div
  {
    background-color : rgb(250,245,245);
    padding : 1mm 5mm 1mm 1mm; 
    border-radius : 10mm;
    transition : 0.5s;
    cursor : pointer;
  }

  #checkbox div:hover
  {
    background-color : rgb(230,230,230);
  }

  #application_status
  {
    position : fixed;
    width : 100vw;
    height : 100%;
    background-color : rgb(0,0,0,0.87);
    top : 0;
    z-index : 5;
    display :none ;
  }

  #status
  {
    position : absolute;
    transform : translate(-50%,-50%);
    top : 40%;
    left : 50%;
  }

  #loading
  {
    color : white;
    font-size : 7mm;
    display :none ;
  }

  #loading img
  {
     width : 80px;
     margin-top: 3mm;
  }

  #success_failed
  {
    color : white;
    font-size : 5mm;
    border-radius : 2mm;
    width : fit-content;
    text-align :center ;
    display :none ;
  }


  #success_failed img
  {
    width : 40px;
  }

  #success_failed h1
  {
    margin-bottom : 5mm;

  }

  #application_status hr
  {
     background-color : orange;
  }

  #application_status button
  {
    border : none;
    background-color : rgb(20,200,20) ;
    color : black;
    padding : 2.5mm 15mm;
    border-radius : 20mm;
    font-size : 4mm;
    box-shadow : 2px 2px 10px 2px rgb(0,0,0,0.2);
    margin-top : 4mm;
  }
  
  #checkbox
  {
    padding :4mm 0mm
  }

  @media only screen and (max-width : 991px) 
  {
    #application_form  h1
    {
      font-size : 7vw;
      text-align : center;
      padding : 2mm 0mm;
    }

    #application_form_section
    {
      padding : 12mm 5mm
    }

    #loading 
    {
       font-size : 5vw;
    }

    #loading img
    {
       width : 70px
    }

    #success_failed
    {
       width : 90vw;
    }

    #success_failed
    {
      font-size : 5mm;
      font-weight : 200;
    }

    #success_failed h1
    {
      font-size : 6mm;
    
    }

    #application_status button
    {
      padding : 2mm 10mm;
      font-size : 4mm
    }
  }

</style>