<?php
if(!isset($_SESSION)){session_start();}

if($_SERVER["HTTP_REFERER"]){


    require_once('controller/Process.php');
    if($_POST['mentor']){
        
        $mentor_id =$_POST['mentor'];
        $mentee =$_POST['mentee'];
       
        $pros =new process;
        $pros-> save_mentor($mentor_id,$mentee);
        
    }

}else{
    echo 'nay';
}


?>