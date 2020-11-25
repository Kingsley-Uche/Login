<?php
 require_once('./models/Assign.php');
 if(!isset($_SESSION)){session_start();}
Class Process{
   
    public $handler;
 function __construct(){

        $this-> handler= new  Assign;

    }


    function save_mentor($mentor_id,$mentee){
      $this->handler->save_assign($mentor_id,$mentee);
    
    }
    function get_all_mentee($id){

$output =$this->handler->get_all_mentee($id);
return $output;

    }
    function get_all_mentors($id){
        $this->handler->get_all_mentors($id);

    }
}


?>