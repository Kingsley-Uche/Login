<?php

include_once('./controller/users_controller.php');
$get_user =new Users_controller;
$data_mentor =$get_user-> get_all_mentor();
$data_mentee =$get_user->get_all_mentee();
//$mentee =$get_user->get_all_mentee();
//print_r($data_mentee);

?>

   

    <!-- Page Content -->
    <div class="wrapper ">
    
    
   <div class='row'>
       <div class='col-md-10'>

       <div class='card' >
       <?php
       if(isset($_SESSION['update']) && $_SESSION['update']==!''){
           echo  $_SESSION['update'];
           unset($_SESSION['update']);

       }
       
       ?>
       </div>
       </div>
      
       
   </div>
    
    <div class="row ">
                
        <div class="col-md-8">
            <form action="submit.php" name='assign_form' method='post'>
            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Assign Mentors to Mentee</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                      <label for="Select Mentor" class='sr-only'>Select Mentors</label>
                          <select name="mentor" id="mentor" class='select2 form-control'>
                              <option value="">Select Mentor</option>
                              <?php
                              
                              for ($i=0; $i <count($data_mentor) ; $i++) { ?>
                               
<option value="<?php echo $data_mentor[$i]['id'];?>" >
<?php echo $data_mentor[$i]['fname'].''.$data_mentor[$i]['lname'];
echo "</option>";

                              }
	
                              
                              
                              ?>
                          </select>
                      </fieldset>
                  </div>
              </div>
              <div class="card-block">
                  <div class="card-body">
                  <fieldset class="form-group">
                  <div class="form-group"><label>*Please Assign a mentee </label></div>
                  <?php
                  for ($i=0; $i <count($data_mentee) ; $i++) {?>
                      <div class='form-group'>
                      <label> Assign
                     <?php echo $data_mentee[$i]['fname'].''.$data_mentee[$i]['lname'];?>

                    <input class="mentee" type="checkbox" name="mentee[]" value="<?php echo $data_mentee[$i]['id'];?> " />
                      <label>

                        

                  </div>

                 <?php  }?>
  

                      </fieldset>
                  </div>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <button class="btn btn-success" id='assign_btn' type='button'>Assign</button>
                  </div>
              </div>
          </div>
          </form>
      <!-- end of form
           
            
      -->
          
        </div>
        <!-- hii -->

    </div>
    

    
 </div>
   

     <script type="text/javascript">
$(document).ready(function () {
    $('#assign_btn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }else if($('#mentor').val()==''){
          alert('Please Select a mentor');

      }else{
$('#assign_btn').attr('type', 'submit');

      }

    });
});

</script>

 <!-- Sidebar -->
 