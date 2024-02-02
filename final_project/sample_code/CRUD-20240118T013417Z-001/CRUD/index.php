<?php


    include_once 'database.php';


    $db = new Database();


    $message = "";
    



?>






<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    
    

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
</head>

<body>

    <br><br>

    <div class="container">

        <div class="row">


            <div class="col-md-12">

                <div class="card">

                    <div class="card-header row">

                        <div class="col-md-6">

                            <h3>All Student Information</h3>

                        </div>

                        <div class="col-md-6">

                            <a href="addStudent.php" class="btn btn-info float-right">Add Student</a>

                        </div>

                    </div>


                    <div class="card-body">

                        <table class="table table-bordered">


                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>


                            <?php
                      
                      
                      
                              $sql = "select * from student order by id desc";

                              $result = $db->select($sql);

                              if($result){

                                  while($row = mysqli_fetch_assoc($result)){

                            ?>
                            
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><img src="<?=$row['photo'];?>" width="100px"></td>
                                <td><?=$row['name'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['phone'];?></td>
                                <td><?=$row['address'];?></td>
                                <td>

                                    <a href="editStudent.php?id=<?=base64_encode($row['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>

                                </td>

                            </tr>

                            <?php         
 
                                }


                            }


                            ?>







                        </table>






                    </div>


                </div>

            </div>

        </div>

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
