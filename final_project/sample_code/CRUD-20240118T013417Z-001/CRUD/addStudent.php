<?php


    include_once 'database.php';


    $db = new Database();


    $message = "";


    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        
        
        //image processing code
        
        $permited = array('jpg', 'jpeg', 'png');
        
        $photo_name = $_FILES['photo']['name'];         //wallpaper.JPG 
        $photo_size = $_FILES['photo']['size'];         //25kb
        $photo_temp = $_FILES['photo']['tmp_name'];     //hjsdhygsd.jpg
        
        
        $div = explode('.', $photo_name);              // wallpaper    JPG
        
        $file_extension = strtolower(end($div));        // JPG   ->   jpg
        
                        //hsdjkhjkjfkdsjdfkikojskjdfsfdml        hsdjkhjkjfk
        $unique_name = substr(md5(time()), 0, 10) . '.' . $file_extension;       //hsdjkhjkjfk.jpg
        
        $upload_photo = "upload/".$unique_name;        //upload/hsdjkhjkjfk.jpg         --> pathway
        
        
        
        if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($photo_name)){
            
            $message = "Fields must not be empty";
            
        }elseif($photo_size > 1048576){
            
            $message = "File size must be less than 1 mb";
            
        }elseif(in_array($file_extension, $permited) == false){
            
            $message = "You can only upload jpg, jpeg or png format image";
            
        }else{
            
            move_uploaded_file($photo_temp, $upload_photo);
            
            $sql = "insert into student(name, email, phone, address, photo) values('$name', '$email', '$phone', '$address', '$upload_photo')";
            
            
            $res = $db->insert($sql);
            
            
            if($res){
                $message = "Add Successfully";
            }else{
                $message = "Registration Failed";
            }
            
            
            
            
            
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }





?>











<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    

    
    
    
    
    <link rel="stylesheet" href="">
</head>

<body>
 
 
 
    <div class="container">
       
       <div class="row d-flex justify-content-center">
          
          <div class="col-md-8">
          
          <br><br>
        
           
            <div class="card">
              
                
                  
                <?php
                
                if(empty($message)){
                    
                    
                }else{
                
                    
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong><?=$message?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                
                <?php            
                    
                }
                

                ?>  
                 
                 
                 
                
                  
                  
                
                

               
               <div class="card-header">
                 
                 <div class="row">
                    
                    <div class="col-md-6">
                       
                       <h3>Add Student Information</h3>
                        
                    </div>
                    
                    
                    <div class="col-md-6">
                       
                       <a href="index.php" class="btn btn-info float-right">Show Student List</a>
                        
                        
                    </div>
                     
                 </div>
                  
                  
                   
               </div>
               
               
               <div class="card-body">
                  
                  <form method="post" action="addStudent.php" class="" enctype="multipart/form-data">
                     
                     <label>Name</label>
                     <input type="text" name="name" placeholder="Enter your name" class="form-control">
                     
                     <label>Email</label>
                     <input type="email" name="email" placeholder="Enter your email" class="form-control">
                     
                     <label>Phone</label>
                     <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                     
                     <label>Photo</label>
                     <input type="file" name="photo" class="form-control">
                     
                     <label>Address</label>
                     <textarea name="address" placeholder="Enter your address" rows="3" cols="50" class="form-control"></textarea>
                     
                     <br>
                     
                     <input type="submit" name="submit" value="ADD STUDENT" class="btn btn-success form-control">
                      
                  </form>
                   
               </div>
                
            </div>
             
             
              
          </div>
           
       </div>
        
    </div>
  
  
  
   
   
   
   
   
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
