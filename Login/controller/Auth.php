<?php
if(!isset($_SESSION)){session_start();}
function sanitize($value) {
    return preg_replace('/\s+/', '', $value);
}
if(isset($_POST['cf_password'])){



$data= array_map('sanitize', $_POST);

require_once('../models/users.php');
$add =new Users;
$add->signUp($data);







}else if(isset($_POST['loger'])){

    //it is a signin
    $data= array_map('sanitize', $_POST);  
require_once('../models/users.php');
$add =new Users;
$add->login($data);

}

?>

