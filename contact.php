<?php include("resources/connection.php"); ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Online residential real estate brokerage - Nectr Realty</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main.css">


  <style>

      html, body {
        width: 100%;
        margin: 0px;
        font-family: 'Nunito Sans', sans-serif;
      }
      .topbar {
        position: relative;
        float:left;
        z-index: 10;
        width:100%;
        height:auto;
        padding: 24px 0px;
        background-image:linear-gradient(315deg, #FFF8F1 ,#FFF1E4, #FEE9D6);
      }
      @media screen and (max-width:600px) {
        .topbar {
          padding-top: 12px 0px;
        }
      }
      .company-logo{
        position: relative;
        z-index: 12; /*puts logo on top of navbar - navbar is 100% width*/
        float:left;
        width:160px;
        height:auto;
        margin-left:42px;

      }
      @media screen and (max-width:600px) { /* when browser width is 600px wide or less - this style is used */
        .company-logo{
          width:90px;
          margin-left:24px;
        }
      }

      .topnav { /* effect both responsive mini menu and desktop block menu */
        position: absolute;
        z-index: 10;
        left: 0;
        right: 0;
        margin: auto;
        margin-top: 12px;
        padding: 12px 0px;
        text-align: center;
        font-size: 18px;
        font-weight: 600;

      }
      .topnav a {
        padding: 9px 24px;
        text-decoration: none;
        color: rgba(2,12,42,1);
      }
      .topnav a:hover{
        color: rgba(2,12,42,.42);
      }
      .topnav a.active{
        color: rgba(2,12,42,1);
      }
      .topnav .icon {
        display: none;
      }
      .login-btn {
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1;
        background:rgba(242,242,242,.2);
        border-radius:42px;
        text-decoration:none;
        margin-right:42px;
        margin-top: 0px;
        color:rgba(255,255,255,1);
      }
      .arrow {
        border:1px solid rgba(2,12,42,1);
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding:4px;
      }
      .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
      }
      .topnav .contactNumber {
        display: none;
      }
      @media screen and (max-width: 600px) { /* mobile style - removes block style menu links and displays icon only */
        .topnav a {
          display: none;
        }
        .topnav a.icon {
          position: absolute;
          right: 0;
          top: 0;
          display: block;
          width:24px;
          border-radius: 42px;
          margin-right:24px;
          padding: 0px 12px;
          background: rgba(242,242,242,.2);
        }
      }
      @media screen and (max-width: 600px) { /* responsive mini menu styles when icon clicked */
        .topnav.responsive {
          position: absolute;
          left: 0;
          right: 0;
          z-index: 10;
          width: 90%;
          padding-top: 42px;
          border-radius: 9px;
          box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1);
          background: #F9FCFF;
        }
        .topnav.responsive .icon{
          position: absolute;
          right: 0;
          top: 0;
          margin-top:12px;
          margin-right:0px;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
          color:rgba(2,12,42,1);
          font-size:15px;
          font-weight: 600;
        }
        .topnav.responsive .login-btn{
          position: relative;
          z-index: 1;
          margin: auto;
          width: 70px;
          margin-bottom:6px;
          margin-top: 12px;
          border-radius: 42px;
          padding:6px 12px 6px 12px;
          background: #ee9346;
          color:rgba(255,255,255,1);
          text-decoration:none;
          font-size:16px;
          font-weight:600;
          text-align: center;
        }
        .topnav.responsive .arrow{
          border:1px solid rgba(255,255,255,1);
          border-width: 0 2px 2px 0;
          display: inline-block;
          padding:3px;
        }
        .topnav.responsive .contactNumber{
          display:block;
          width:100%;
          margin: auto;
        }
      }

      /* HEADER */
      header {
        position: relative;
        float:left;
        z-index: 4;
        float:left;
        width:100%;
        height:350px;
        margin: 0px;
        background-image:linear-gradient(325deg, #FFF8F1, #FFF1E4, #FEE9D6);
      }
      header .header-content {
        position: relative;
        z-index: 10;
        width: 75%;
        margin: auto;
        text-align: center;
      }
      header h1{
        margin-bottom: 18px;
        color: rgba(2,12,42,1);
      }
      header h2{
        width:80%;
        margin: auto;
        padding: 0px 42px;
        color: rgba(2,12,42,.62);
      }
      .pageTitle-thin1{
        font-size:54px;
        font-weight:300;
        line-height: 1;
      }
      .pageTitle-thin2{
        font-size:32px;
        font-weight:300;

      }
      .div {
        position: relative;
        bottom: 0;
        float:left;
        z-index: 2;
        float:left;
        width:100%;
        height: 1000px;
        background-image:linear-gradient(315deg,#FFBB7D ,#FFA378 , #FF7572, #FE5C6C);
      }
      svg {
        position:absolute;
        float:left;
        z-index: 4;
        top:0;
        left: 0;
        width: 100%;
        height:200px;
      }

      .circle-1 {
        position: absolute;
        top: 300px;
        left: -200px;
        z-index: 1;
        background-image: linear-gradient(315deg, #fbb034 20%, #ffdd00 94%);
        height: 600px;
        width: 600px;
        border-radius: 600px;
        opacity: .6;
      }
      .circle-2 {
        position: absolute;
        top: 12px;
        left: 800px;
        z-index: 1;
        background-image: linear-gradient(315deg, #fc9842 20%, #fe5f75 84%);
        height: 420px;
        width: 420px;
        border-radius: 420px;
        opacity: .6;
      }

        #left-container{
          position: absolute;
          top: 0;
          z-index: 7;
          width:42%;
          float: left;
          margin-left: 42px;
          margin-bottom: 12px;
          margin-top: 33%;
          padding: 24px;
          background: #f9fcff;
          box-shadow: 0 15px 40px 0 rgba(0, 0, 0, 0.2);
          border-radius: 6px;
        }
        @media at screeen and (max-width:600px); {
          
      #left-container{
          position: absolute;
          top: 0;
          z-index: 7;
          width:82%;
          float: left;
          margin-left: 42px;
          margin-bottom: 12px;
          margin-top: 33%;
          padding: 24px;
          background: #f9fcff;
          box-shadow: 0 15px 40px 0 rgba(0, 0, 0, 0.2);
          border-radius: 6px;
        }
      }

        label{
          padding:12px 12px;
          font-family: 'Nunito Sans', sans-serif;
          float: left;
          font-size: 15px;
          font-weight: 600;
          color: #415775;
        }
        .input{
          width:65%;
          float: right;
          height: 24px;
          padding: 2%;
          border-radius:8px;
          border:none;
        }
        #register-btn{
          width: 150px;
          background-color: #EE9346;
          font-family: 'Nunito Sans', sans-serif;
          font-size: 18px;
          font-weight: 600;
          color: #f1f1f1;
          padding: 12px 2px;

          margin-top: 2px;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          float:right;
        }





  </style>
</head>
<body>



  <!-- beginning of Topbar -->
  <div class="topbar">
    <a href="home.htm"><img class="company-logo" src="./images/nectrLogo-dark.png" ALT="some text"></a>

    <div class="topnav" id="myTopnav">
      <a class="active" href="home.htm">Home</a>
      <a href="sell.htm">Sell</a>
      <a href="pricing.htm">Pricing</a>
      <a href="about.htm">About</a>
      <div class="contactNumber">
        <a style="text-align:left; font-weight:400;">(515) 447-2723</a>
      </div>
      <a href="http://dashboard.nectrrealty.com/login.php" class="login-btn">Log in <i class="arrow right"></i></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <!-- end of Topbar -->


  <!--BEGINNING of HEADER CONTAINER -->
  <header>
    <div class="header-content">
      <h1 class="pageTitle-thin1">Contact our team</h1>
      <h2 class="pageTitle-thin2">We are here to help. Send our team a message and we will reach out within the hour.</h2>
    </div>

  </header>
  <!--END OF HEADER CONTAINER -->


  <div id="left-container">
      <div id="register-container">

        <form method="post">
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label style="">First Name</label>
            <input type="text" placeholder="First name" name="first_name" class="input" required/><br><br>
          </div>
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label style="">Last Name</label>
            <input type="text" placeholder="Last name" name="last_name" class="input" required/><br><br>
          </div>
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label style="">Email</label>
            <input type="text" placeholder="Email" name="return_contact" class="input" required/><br><br>
          </div>
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label style="">Phone</label>
            <input type="text" placeholder="Phone" name="return_contact" class="input" required/><br><br>
          </div>
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label style="">Address<br><span style="font-size:12px; color:rgba(2,12,42,.42);">if related to question</span></label>
            <input type="text" placeholder="Street & city" name="return_contact" class="input" required/><br><br>
          </div>
          <div style="position:relative; float:left; width:100%; margin-bottom:24px; ">
            <label>Messsage</label>
            <textarea type="text" placeholder="Message" name="message" class="input" style="height:124px;" required></textarea><br><br>
          </div>
          <input type="submit" id="register-btn" name="contact" value="Submit"/>
        </form>
      </div>

  </div>
  <!-- End of Left Container -->


  <!--BEGINNING of HEADER CONTAINER -->
  <div  class="div">
    <svg  viewBox="0 0 100 100" preserveAspectRatio="none">

    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:#FEE9D6;stop-opacity:1" />
      <stop offset="1%" style="stop-color:#FFF1E4;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#FFF8F1;stop-opacity:1" />
    </linearGradient>
      <polygon class="svg--sm" fill="url(#grad1)" points="0,0 0,100 100,0"/>
    </svg>


    <div class="circle-1"></div>
    <div class="circle-2"></div>


  </div>
  <!--END OF HEADER CONTAINER -->











<?php

  //Contact Form
  if(isset($_POST['contact'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
      $return_contact = $_POST['return_contact'];
      $message = $_POST['message'];

      $query = "INSERT INTO `contact_form` ( `first_name`, `last_name`, `return_contact`, `message`)
                VALUES( '$first_name', '$last_name', '$return_contact', '$message')";
      $results = mysqli_query($connection, $query);

      if($results) {

            echo 'Successful';

            //send an email to me when someone submits form
            require "PHPMailer/PHPMailerAutoload.php";

                 function smtpmailer($to, $from, $from_name, $subject, $body)
                     {
                         $mail = new PHPMailer();
                         $mail->IsSMTP();
                         $mail->SMTPAuth = true;

                         $mail->SMTPSecure = 'tls';
                         $mail->Host = 'smtp.gmail.com';
                         $mail->Port = 587;
                         $mail->Username = 'andrew@nectrrealty.com';
                         $mail->Password = '@Orange0624';

                    //   $path = 'reseller.pdf';
                    //   $mail->AddAttachment($path);


                         $mail->IsHTML(true);
                         $mail->From="andrew@nectrrealty.com";
                         $mail->FromName=$from_name;
                         $mail->Sender=$from;
                         $mail->AddReplyTo($from, $from_name);
                         $mail->Subject = $subject;
                         $mail->Body = $body;
                         $mail->AddAddress($to);
                         if(!$mail->Send())
                         {
                             $error ="Please try Later, Error Occured while Processing...";
                             return $error;
                         }
                         else
                         {
                             $error = "Thanks You !! Your email is sent.";
                             return $error;
                         }
                     }

                     $to   = 'andrew@nectrrealty.com';
                     $from = 'andrew@nectrrealty.com';
                     $name = 'Nectr Realty';
                     $subj = 'Contact Form';
                     $msg = "
                           <html style='float:left; font-family:Nunito Sans'>
                           <head>
                           <title>HTML email</title>
                           </head>
                           <body style='width:600px; height:500px; padding: 24px 42px 0px 42px; color:rgba(2,12,42,1); border:1px dotted purple;'>
                           <p style='margin:0px; padding:12px 0px 12px 12px; width:100%; border-bottom:2px solid rgba(2,12,42,.42); box-sizing:border-box;'><img src='https://i.ibb.co/zRymTPm/Nectr-Logo.png' width='100px' height=''></p>
                           <p style='margin-bottom:36px; padding:6px 0px 6px 12px; font-size:24px; font-weight:400; margin-bottom:12px;'> Thank you for contacting us</p>
                           <p style='margin-bottom:36px; padding-left:12px; font-size:16px; font-weight:400;'> Hello $first_name, </p>
                           <p style='margin-bottom:24px; padding-left:12px; font-size:16px; font-weight:400;'> We received your contact submission. <span style='color:rgba(2,12,42,.42);'> Message: $message </span></p>
                           <p style='margin-bottom:36px; padding-left:12px; font-size:16px; font-weight:400;'> Someone from our team will be reaching out within the hour. If you want to call instead our number is 515-447-2723.</p>
                           <p style='margin-bottom:6px; padding-left:12px; font-size:16px; font-weight:400;'> Thank you,</p>
                           <p style='padding-left:12px; color:rgba(2,12,42,.42); font-size:14px; font-weight:400;'> - The Nectr Realty Team</p>
                           </body>
                           </html>
                            ";

                     $error=smtpmailer($to,$from, $name ,$subj, $msg);




      }else{
          //send failed
          echo 'Your message did not send';
      }
     }


?>



  </body>
  </html>
