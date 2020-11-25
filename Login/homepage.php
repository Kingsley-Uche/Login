<?php
 
 if(!isset($_SESSION)){session_start();}
 if(!isset($_SESSION['engaged'])&& $_SESSION['engaged']!==1){
    header('location:/views/logout.php');
 }
 
require('views/home_header.php');
 
include_once('controller/Process.php');

$get_mentors =new Process;

$id=$_SESSION['user_id'];
if($_SESSION['user_type']==1){
  
    //is a mentor
    $data_mentors =$get_mentors-> get_all_mentee($id);
   

}else if($_SESSION['user_type']==2){
    //is mentee
    $data_mentors =$get_mentors-> get_all_mentors($id);
}else{
header('location:/views/logout.php');
    //unauthorized access 
}
// $data_mentors =$get_mentors-> get_all_mentor($id);
// $data_mentees=$get_mentors->get_all_mentee($id);


?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <script type = "text/javascript" > history.pushState(null, null, location.href); history.back(); history.forward(); window.onpopstate = function () { history.go(1); }; </script>
   
        
  <?php
 require('views/navbar.php');
 require('views/home_page.php');
 include('views/home_footer.php');
  ?>       
           


   