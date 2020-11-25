


<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Uche</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href='assets/styles/css/bootstrap.min.css'>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            
        <![endif]-->
        
        <div class='container'>
        
        <script src="assets/js/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/js/popper.min.js" ></script>
        <script src="assets/js/js/popper.min.js.map" ></script>
        <script src="assets/js/js/bootstrap.js"></script>
        
        ​<script type = "text/javascript" > history.pushState(null, null, location.href); history.back(); history.forward(); window.onpopstate = function () { history.go(1); }; </script><?php
require_once('../Login/controller/users_controller.php');

require_once('views/home_header.php');
require_once('views/assign_user.php');
require_once('views/home_footer.php');

?>