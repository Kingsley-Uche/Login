<?php 
//if no session set, set set session
if(!isset($_SESSION)){
    session_start();
    }
    if(isset($_SESSION['engaged']) && $_SESSION['engaged']==1){
        require_once('homepage.php');

    }elseif(isset($_SESSION['student'])){
        echo 'akwukwo';
    }else{
    require_once('views/login.php');
        
    }
    
    ?>


