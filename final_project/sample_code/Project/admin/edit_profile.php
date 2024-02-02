<?php 

    include('header.php');


    include_once '../config/database.php';

    $db = new Database();


    
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        
        if(empty($name) || empty($phone) || empty($address)){
            
            echo  "<script>
                        alert('Every field must be fullfilled.');
                   </script>";
            
        }else{
            
            $sql = "update admin set name = '$name', phone = '$phone', address = '$address' where id = '$id'";
            
            $result = $db->update($sql);
            
            if($result){
                echo  "<script>
                        alert('Updated Successfully!!');
                   </script>";
                
            }else{
                echo  "<script>
                        alert('Update Failed!');
                   </script>";
            }
            
            
        }
        
        
        
        
        
        
        
    }


    
    

    

?>




<div class="col-md-9">

    <h4 id="conH">Edit Your Profile Information</h4>
    
    
    <?php
    
    
    $sql = "select * from admin where id = '$id'";
    
    $result = $db->select($sql);
    
    
    if($result){
        
        while($row = mysqli_fetch_assoc($result)){
            
    ?>    
            
            <form class="form-horizontal" action="" method="post">
       
               <div class="form-group">
                  <label class="control-label col-sm-2">Name: </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="name" id="name" value="<?=$row['name']?>">

                  </div>

               </div>

               <div class="form-group">
                  <label class="control-label col-sm-2">E-mail: </label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" name="email" id="email" value="<?=$row['email']?>" readonly>

                  </div>

               </div>

               <div class="form-group">
                  <label class="control-label col-sm-2">Phone: </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="phone" id="phone" value="<?=$row['phone']?>">

                  </div>

               </div>

               <div class="form-group">
                  <label class="control-label col-sm-2">Address: </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="address" id="address" value="<?=$row['address']?>">

                  </div>

               </div>

               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">

                     <input type="submit" name="submit" value="U P D A T E" class="btn btn-default">

                  </div>

               </div>


            </form>
            
    <?php        
            
        }
        
    }
    
    

    
    ?>
    
    
    
    
    



</div>




























<?php 

    include('footer.php');

?>