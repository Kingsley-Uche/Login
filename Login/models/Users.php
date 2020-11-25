<?php
if(!isset($_SESSION)){session_start();}
Class Users{
    public $conn;
	function __construct(){
        $hostname="localhost";
        $password="XM2%PYKHuqpX";
        $database="kammasof_login";
        $username='kammasof_kammasof';
		$this->kamx = new Mysqli($hostname,$username,$password,$database);

                    $this->conn = new Mysqli($hostname,$username,$password,$database);
                        }


     function signUp($data){
                        $token ="asdefghA#SEFGHTYUE0(;')OONCBBMDIuiN12938303*";
                            $token=str_shuffle($token);
                            $token= substr($token,0,13);
                            $confirmed ='0';
                                                        
                             $firstname= mysqli_real_escape_string($this->conn,$data['fname']);
                            $lastname=  mysqli_real_escape_string($this->conn,$data['lname']);
                            $email=  mysqli_real_escape_string($this->conn,$data['email']);
                            $password=  mysqli_real_escape_string($this->conn,$data['password']);
                            $usertype =  mysqli_real_escape_string($this->conn,$data['user_type']);
                            $phone=  mysqli_real_escape_string($this->conn,$data['phone']);
//run insertion into database
$sql="INSERT INTO  users SET fname='$firstname',lname='$lastname',email='$email',password='$password',usertype='$usertype',phone='$phone',token='$token',confirmed='$confirmed'";          

$status = $this->conn->query($sql);                      
echo $status;
                           
                        }
                       

public function login($data){
    
   $username = mysqli_real_escape_string($this->conn,$data['username']);
   $password= mysqli_real_escape_string($this->conn,$data['password']);
   $usertype= mysqli_real_escape_string($this->conn,$data['user_type']);
   $sql ="SELECT* FROM users WHERE email='$username' AND password='$password' AND usertype='$usertype'";
   $output=$this->conn->query($sql);
			
			
			
   $res=$output->fetch_assoc();
   $_SESSION['user_name']=$res['fname'].' '.$res['lname'];
			$_SESSION['user_email']=$res['email'];
            $_SESSION['user_phone']=$res['phone'];
            $_SESSION['engaged']=1;
            $_SESSION['user_type'] =$res['usertype'];
            $_SESSION['user_id']=$res['id'];
            
           if($output->num_rows==1){
            echo '1';
           }else{
               echo 'failed';
           }
   

   


}
public function get_all_mentors(){
    $sql ="SELECT* FROM users WHERE usertype ='1'";
    $res = $this->conn->query($sql); 
    //return $res->fetch_assoc();    
    $row=array();
	while($reslt=$res->fetch_assoc()){
		
		$row[]=$reslt;
		
	}                 
  return $row;  

}
public function get_all_mentee(){
    $sql ="SELECT* FROM users WHERE usertype ='2'";
    $res = $this->conn->query($sql); 
    //return $res->fetch_assoc();    
    $row=array();
	while($reslt=$res->fetch_assoc()){
		
		$row[]=$reslt;
		
	}                 
  return $row;  

}

}




?>
