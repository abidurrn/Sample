<?php 

    include('header.php');

    include_once '../config/database.php';

    $db = new Database();


    if(isset($_POST['submit'])){
        
        $old_pass = $_POST['o_pass'];
        $new_pass = $_POST['n_pass'];
        $rnew_pass = $_POST['r_pass'];
        
        
        $sql = "select * from admin where id = '$id'";
        
        $result = $db->select($sql);
        
        
        if($result){
            
            while($row = mysqli_fetch_assoc($result)){
                
                if($old_pass != $row['password']){
                    
                    echo  "<script>
                        alert('Old password is WRONG!! Process Failed...');
                   </script>";
                    
                }else{
                    
                    if($new_pass != $rnew_pass){
                        
                        echo  "<script>
                            alert('Type new password correctly. Process Failed...');
                       </script>";
                        
                    }else{
                        
                        $sql = "update admin set password = '$new_pass' where id = '$id'";
                        
                        $res = $db->update($sql);
                        
                        if($res){
                            
                            echo  "<script>
                                alert('Password changed successfully.');
                           </script>";
                            
                        }else{
                            
                            echo  "<script>
                                alert('Process Failed...');
                           </script>";
                        }
                        
                        
                    }
                    
                    
                    
                }
                
                
                
                
                
            }
              
        }
        
        
        
    }

    
    
    


?>



    <div class="col-md-9">
       
       <h4 id="conH">Change your password</h4>
       
       <form class="form-horizontal" action="" method="post">
       
       
           <div class="form-group">
              <label class="control-label col-sm-2">Old Password: </label>
              <div class="col-sm-10">
                 <input type="password" class="form-control" name="o_pass" placeholder="Enter your old password" id="o_pass">

              </div>

           </div>
           
           <div class="form-group">
              <label class="control-label col-sm-2">New Password: </label>
              <div class="col-sm-10">
                 <input type="password" class="form-control" name="n_pass" placeholder="Enter your new password" id="n_pass">

              </div>

           </div>
           
           
           <div class="form-group">
              <label class="control-label col-sm-2">Confirm New Password: </label>
              <div class="col-sm-10">
                 <input type="password" class="form-control" name="r_pass" placeholder="Retype your new password" id="r_pass">

              </div>

           </div>
           
           
           <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">

                 <input type="submit" name="submit" value="U P D A T E" class="btn btn-default">

              </div>

           </div>
       
       
        </form>
        
    </div>
























<?php 

    include('footer.php');

?>