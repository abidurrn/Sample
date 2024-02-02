<?php


    include_once 'config/database.php';

    $db = new Database();


    if(isset($_POST['submit'])){
        
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['webs'];
        $message = $_POST['message'];
        
        
        if(empty($name) || empty($email) || empty($message)){
            echo  "<script>
                        alert('All required must be fullfilled.');
                   </script>";
            
        }else{
            
            $sql = "insert into feedback (name, email, website, message) values ('$name', '$email', '$website', '$message')";
            
            $result = $db->insert($sql);
            
            
            if($result){
                
                echo  "<script>
                        alert('Message Sent Successful!!');
                        window.location.href = 'contact.php';
                   </script>";
            }else{
                
                echo  "<script>
                        alert('Process Failed!!');
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





    <!-- Contact Form Division -->

    <div class="container-fluid" id="contactDiv">

        <div class="container">

            <div class="row text-center">

                <h4><b>C O N T A C T &nbsp;&nbsp; U S</b></h4>

            </div>

            <div class="row text-center">

                <p>contact with us, if you have any suggestions or any kind of query</p>

            </div>

            <form class="form-horizontal" action="" method="post">

                <div class="form-group">

                    <label class="control-label col-sm-2">Name: </label>

                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                </div>
                
                <div class="form-group">

                    <label class="control-label col-sm-2">Email: </label>

                    <div class="col-sm-10">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                </div>
                
                <div class="form-group">

                    <label class="control-label col-sm-2">Website: </label>

                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="webs" name="webs" placeholder="Enter your website link">
                    </div>

                </div>
                
                <div class="form-group">

                    <label class="control-label col-sm-2">Message: </label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="20" id="message" name="message" placeholder="Enter your opinion"></textarea>
                    </div>

                </div>
                
                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10">
                        
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-default">
                    </div>

                </div>

            </form>


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
