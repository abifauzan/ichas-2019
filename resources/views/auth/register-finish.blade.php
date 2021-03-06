<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('auth_assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('auth_assets/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('auth_assets/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('auth_assets/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('auth_assets/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('auth_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('auth_assets/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('auth_assets/css/vendors.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('auth_assets/css/custom.css')}}" rel="stylesheet">


	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "{{route('frontend')}}"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 10000)" style="background-color:#fff;">
<?php
						// $mail = $_POST['email'];
						// $to = "info@domain.com";/* YOUR EMAIL HERE */
						// $subject = "Registration from Wilio";
						// $headers = "From: Registration from Wilio <noreply@yourdomain.com>";
						// $message = "DETAILS\n";
						// $message .= "\nFirst name: " . $_POST['first_name'];
						// $message .= "\nLast name: " . $_POST['last_name'];
						// $message .= "\nEmail: " . $_POST['email'];
						// $message .= "\nCountry: " . $_POST['country'];
						// $message .= "\nTerms and conditions accepted: " . $_POST['terms'] . "\n";

						// $message .= "\nACCOUNT DETAILS";
						// $message .= "\nUser Name: " . $_POST['user_name'];
						// $message .= "\nPassword: " . $_POST['password2'];


						// //Receive Variable
						// $sentOk = mail($to,$subject,$message,$headers);

						// //Confirmation page
						// $user = "$mail";
						// $usersubject = "Thank You";
						// $userheaders = "From: info@Wilio.com\n";
						// /*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						// //Confirmation page WITH  SUMMARY
						// $usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message";
						// mail($user,$usersubject,$usermessage,$userheaders);

?>
<!-- END SEND MAIL SCRIPT -->

<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>Request successfully sent!</span>Check your E-Mail for the notification & Thank you for your time!</h4>
    <small style="margin-bottom: 20px">You will be redirect back in 10 seconds.</small>
    <a href="{{route('home')}}" class="btn btn-primary">go to Dashboard Area</a>
</div>
</body>
</html>
