<?php


    include_once 'config/database.php';

    $db = new Database();


    $id = "";


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        
    }

    


?>





<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body id="myPage">


    <!-- Company name section  -->
    <div class="container text-center">
        <p></p>
        <img src="images/logo-full-final.png" width="300px">
        <h5><b>Boost your skills and build the world</b></h5>

    </div>


    <!-- Navbar section  -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">

                <a class="navbar-brand" href="index.php"><b>eShikhon.com</b></a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">
                    <li><a href="news.php">News</a></li>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/login.php">Login</a></li>
                </ul>

            </div>
        </div>
    </nav>





    <!-- Single news view section -->


    <div class="container-fluid">

        <div class="container">


            <?php
           
           $sql = "select * from news where news_id = '$id'";
           
           $result = $db->select($sql);
           
           if($result){
               
               while($row = mysqli_fetch_assoc($result)){
                   
                   $datetime = strtotime($row['news_date']);
                        
                    $date = date("d M, Y", $datetime);
                   
            
            ?>


            <h2><?=$row['news_title']?></h2>

            <br><br>

            <img src="admin/<?=$row['news_photo']?>" width="500px">

            <br><br>

            <h4><?=$date?></h4>
            <br><br>

            <p><?=$row['news_description']?></p>






            <?php        
                   
                   
               }
           }
           
           
           ?>




        </div>

    </div>










    <!-- Footer section: address and subscribe -->

    <footer class="container-fluid" id="myfooter">

        <div class="container">

            <div class="row">

                <div class="col-sm-4">

                    <h4>Address</h4>

                    <p><span class="glyphicon glyphicon-globe"></span> eShikhon.com <br><span class="glyphicon glyphicon-map-marker"></span> Office: 151/7, level-4, Goodluck Center <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panthapath Signal, Green Road <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhanmondi, Dhaka-1205.<br><span class="glyphicon glyphicon-phone-alt"></span> Helpline: 09639 399 399 (10 am - 11 pm)</p>

                </div>

                <div class="col-sm-8">

                    <div>
                        <img src="images/logo-full-final.png" width="40%">
                        <br><br><br>
                    </div>


                    <form class="form-horizontal" action="" method="">

                        <div class="form-group">

                            <div class="col-sm-10">

                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">

                            </div>

                            <div class="col-sm-2">

                                <input type="submit" class="btn btn-success" value="Subscribe">

                            </div>

                        </div>

                    </form>


                </div>

            </div>

        </div>

    </footer>


    <!-- copyright footer section -->

    <div class="container-fluid" id="copyFooter">

        <div class="row">

            <div class="col-sm-12 text-center">

                <a href="#myPage"><span class="glyphicon glyphicon-chevron-up"></span></a>

            </div>

        </div>


        <div class="row text-center">

            <p>&copy; Copyright 2023 eShikhon.com</p>

        </div>

    </div>










</body>

</html>
