<?php


include_once 'database.php';

$db = new Database();


$id = "";
$message = "";



if(isset($_GET['id'])){
    
    $id = base64_decode($_GET['id']);
    

}


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

    $upload_photo = "upload/".$unique_name;  
    
    
    
    if(empty($name) || empty($email) || empty($phone) || empty($address)){
        
        $message = "Fields must not be empty";
    }
    
    
    
    if(empty($photo_name)){
        
        $sql = "update student set name ='$name', phone = '$phone', address = '$address', email = '$email' where id = '$id'";
        
        $result = $db->update($sql);
        
        if($result){
            
            $message = "Updated Successfully!";
        }else{
            
            $message = "Update Failed!";
        }
        
        
    }else{
        
        
        if($photo_size > 1048576){
            
            $message = "File Size must be less than 1 MB";
            
        }elseif(in_array($file_extension, $permited) == FALSE){
            
            $message = "You can only upload jpg, jpeg or png format image";
            
        }else{
            
            move_uploaded_file($photo_temp, $upload_photo);
            
            
            $sql = "update student set name ='$name', phone = '$phone', address = '$address', email = '$email', photo = '$upload_photo' where id = '$id'";
            
            $result = $db->update($sql);
        
            if($result){

                $message = "Updated Successfully!";
            }else{

                $message = "Update Failed!";
            }
            
            
  
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

                                <h3>Edit Student Information</h3>

                            </div>


                            <div class="col-md-6">

                                <a href="index.php" class="btn btn-info float-right">Show Student List</a>


                            </div>

                        </div>



                    </div>


                    <div class="card-body">


                        <?php
                        
                        
                        $sql = "select * from student where id = '$id'";
                        
                        $result = $db->select($sql);
                        
                        if($result){
                            
                            while($row = mysqli_fetch_assoc($result)){
                                
                        
                        ?>        
                                
                        <form method="post" action="" class="" enctype="multipart/form-data">

                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?=$row['name']?>">

                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?=$row['email']?>">

                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?=$row['phone']?>">

                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control">
                            <img src="<?=$row['photo']?>" width="100px">

                            <br>

                            <label>Address</label>
                            <textarea name="address" rows="3" cols="50" class="form-control"><?=$row['address']?></textarea>

                            <br>

                            <input type="submit" name="submit" value="Update Information" class="btn btn-success form-control">

                        </form>        
                                
                                
                                
                                
                        <?php        
                                
                                
                            }
   
                        }
                        

                        ?>






                        

                    </div>

                </div>



            </div>

        </div>

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
