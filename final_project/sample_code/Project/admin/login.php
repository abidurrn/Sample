<?php

include_once '../config/database.php';


$db = new Database();



if(isset($_POST['submit'])){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        $sql = "select * from admin where email = '$email' and password = '$password'";
        
        $result = $db->select($sql);
        
        if($result){
            
            while($row = mysqli_fetch_assoc($result)){
                
                session_start();
                $_SESSION['name'] = "admin";
                
                $_SESSION['id'] = $row['id'];

                
                header("location: home.php");
                
            }
            
        }else{
            
            echo  "<script>
                        alert('Login Failed!! E-mail or Password did not match');
                   </script>";
            
        }
        
  
        
    }
    
  
}





?>




















<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShikhon | Login</title>
    
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="adminStyle.css">
    
    
    
    <style>
        
        
        body{
            background-image: url(../images/ad-login.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        #divForm{
            margin-top: 50px;
            padding: 50px;
            background-color: hsla(206, 59%, 32%, 0.8);
            border-radius: 20px;

        }
        
        
        
        
    </style>
    
</head>

<body>
    
    
    <div class="container-fluid">
      
       <div class="container text-center">
          
          <a href="../index.php"><img src="../images/logo-full-final.png" style="width: 500px; margin: 50px;"></a>
          
          <h4 style="color: white;"><b>A D M I N &nbsp;&nbsp; L O G I N</b></h4>
          
          
          <div class="row">
             
             <div class="col-sm-3">
                 
             </div>
             
             
             <div class="col-sm-6" id="divForm">
                
                <form action="" method="post" class="form-horizontal">
                   
                   <div class="form-group">
                      <div class="col-sm-12">
                         
                         <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                      <div class="col-sm-12">
                         
                         <input type="password" class="form-control" name="password" id="pass" placeholder="Enter your password" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                      <div class="col-sm-offset-10 col-sm-2">
                         
                         <input type="submit" name="submit" class="btn btn-success" value="Login">
                          
                      </div>
                       
                   </div>
                    
                </form>
                 
             </div>
             
             
             
             <div class="col-md-3">
                 
             </div>
             
             
             
              
          </div>
           
       </div>
        
    </div>
</body>
</html>
