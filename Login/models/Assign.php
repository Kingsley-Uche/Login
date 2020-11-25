<?php

if(!isset($_SESSION)){session_start();}
Class Assign{
    public $conn;
	function __construct(){
                    $hostname="localhost";
                    $username="root";
                    $password="";
                    $database="login";

                    $this->conn = new Mysqli($hostname,$username,$password,$database);
                        }




                        public function save_assign($mentor,$mentee){
                                   
                            foreach($mentee as $ment){
                                
                                $insert="INSERT INTO assign_mentor SET mentor_id='$mentor',assign_mentee_id='$ment',assign_status='1'";
                            
                                // echo $insert;
                                $update=$this->conn->query($insert);
                                
                                if($update){
                            
                                    header('location:create.php');
                                    $check="<div style='color:green'>Your have assigned mentor successfully.</div>";
                                    $_SESSION['update']=$check;
                            
                            
                            
                            }
                            
                            
                                    
                                }

                        }
                        public function get_all_mentors($id){
                           // $sql ="SELECT* FROM assign_mentor WHERE assign_mentor_id ='$id'  AND assign_status='1'";
                           
                            $sql =  "SELECT* FROM assign_mentor  JOIN users  ON users.id = assign_mentor_id WHERE mentee_id ='$id'  AND assign_status='1'";
                            $res = $this->conn->query($sql); 
                            //return $res->fetch_assoc();    
                            $row=array();
                            while($reslt=$res->fetch_assoc()){
                                
                                $row[]=$reslt;
                                
                            }                 
                          return $row;  
                        
                        }
                        public function get_all_mentee($id){
                            //$sql ="SELECT* FROM assign_mentor  JOIN users  ON 'users.id' = `assign_mentee_idWHERE mentor_id ='$id'  AND assign_status='1'`";
                            $sql =  "SELECT* FROM assign_mentor  JOIN users  ON users.id = assign_mentee_id WHERE mentor_id ='$id'  AND assign_status='1'";

                            $res = $this->conn->query($sql); 
                            //return $res->fetch_assoc(); 
                           ;   
                            $row=array();
                            while($reslt=$res->fetch_assoc()){
                                
                                $row[]=$reslt;
                                
                            }     
                                     
                          return $row;  
                        
                        }

                    }


?>