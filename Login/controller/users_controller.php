<?php

require_once('./models/users.php');

class Users_controller {

public $user_model;
    function __construct(){

        $this->user_model = new Users;

    }
public function get_all_mentor(){
    
   return  $this->user_model->get_all_mentors();
}


public function get_all_mentee (){
    return  $this->user_model->get_all_mentee();


}
}

?>