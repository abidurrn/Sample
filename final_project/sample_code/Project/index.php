<?php


    include_once 'config/database.php';

    $db = new Database();


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




    <!-- Slider section -->
    <div id="myCoursel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">

        <ol class="carousel-indicators">
            <li data-target="#myCoursel" data-slide-to="0" class="active"></li>
            <li data-target="#myCoursel" data-slide-to="1"></li>
            <li data-target="#myCoursel" data-slide-to="2"></li>
            <li data-target="#myCoursel" data-slide-to="3"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">
                <img src="images/p1.jpg" alt="slider image1" style="width: 100%;">
            </div>

            <div class="item">
                <img src="images/p2.jpg" alt="slider image2" style="width: 100%;">
            </div>

            <div class="item ">
                <img src="images/p3.jpg" alt="slider image3" style="width: 100%;">
            </div>

            <div class="item">
                <img src="images/p4.jpg" alt="slider image4" style="width: 100%;">
            </div>

        </div>



        <a class="left carousel-control" href="#myCoursel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#myCoursel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>


    </div>



    <!-- Recent news section -->
    <div class="container-fluid">

        <div class="row text-center">
            <p id="recentNews">R E C E N T &nbsp;&nbsp;&nbsp; N E W S</p>
        </div>


        <div class="row" style="background-color: #e6ffe6; margin-top: -10px; padding: 10px;">

            <div class="container">

                <div class="row list-group">
                    
                    <?php
                    
                    
                    $sql = "select * from news order by news_id desc limit 5";
                    
                    $result = $db->select($sql);
                    
                    if($result){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            
                    ?>
                            
                    <a href="singleNewsView.php?id=<?=$row['news_id']?>" class="list-group-item"><?=$row['news_title']?></a>
                    
                    
                    <?php        
                            
                        }
                    }
                    

                    
                    ?>
                    
                    
            


                </div>


                <div class="row">

                    <div class="col-sm-3 pull-right text-right">

                        <a href="news.php" class="btn btn-info">Show More</a>
                    </div>

                </div>

            </div>



        </div>

    </div>



    <!-- Popular courses section -->

    <div class="container text-center">

        <h1><b>POPULAR COURSES</b></h1>

        <div class="row">

            <div class="col-md-4">

                <div class="thumbnail">

                    <img src="images/wd.jpg" width="100%" alt="">

                    <div class="caption">

                        <p>বর্তমানে জনপ্রিয় একটি পেশা হল ওয়েব ডেভেলপমেন্ট। ওয়েব ডেভেলপমেন্ট মূলত ইন্টারনেট এর জন্য যেসব ওয়েবসাইট, ওয়েব অ্যাপ্লিকেশন তৈরি করা হয় সেগুলো বিভিন্ন স্ক্রিপ্টিং এবং প্রোগামিং ল্যাঙ্গুয়েজ ব্যবহার করে তৈরী করার প্রক্রিয়াকে বলা হয় ওয়েব ডেভেলপমেন্ট। </p>

                    </div>

                </div>


            </div>


            <div class="col-md-4">

                <div class="thumbnail">

                    <img src="images/gd.jpg" width="100%" alt="">

                    <div class="caption">

                        <p>বর্তমানে জনপ্রিয় একটি পেশা হল ওয়েব ডেভেলপমেন্ট। ওয়েব ডেভেলপমেন্ট মূলত ইন্টারনেট এর জন্য যেসব ওয়েবসাইট, ওয়েব অ্যাপ্লিকেশন তৈরি করা হয় সেগুলো বিভিন্ন স্ক্রিপ্টিং এবং প্রোগামিং ল্যাঙ্গুয়েজ ব্যবহার করে তৈরী করার প্রক্রিয়াকে বলা হয় ওয়েব ডেভেলপমেন্ট। </p>

                    </div>

                </div>


            </div>


            <div class="col-md-4">

                <div class="thumbnail">

                    <img src="images/ad.jpg" width="100%" alt="">

                    <div class="caption">

                        <p>বর্তমানে জনপ্রিয় একটি পেশা হল ওয়েব ডেভেলপমেন্ট। ওয়েব ডেভেলপমেন্ট মূলত ইন্টারনেট এর জন্য যেসব ওয়েবসাইট, ওয়েব অ্যাপ্লিকেশন তৈরি করা হয় সেগুলো বিভিন্ন স্ক্রিপ্টিং এবং প্রোগামিং ল্যাঙ্গুয়েজ ব্যবহার করে তৈরী করার প্রক্রিয়াকে বলা হয় ওয়েব ডেভেলপমেন্ট। </p>

                    </div>

                </div>


            </div>

        </div>

    </div>



    <!-- Team heads division -->

    <div class="container-fluid" style="background-color: #d9d9d9;">


        <div class="container">

            <div class="row text-center">
                <h2>OUR RESPECTED HEADS</h2>

                <br><br>

            </div>

            <div class="row">

                <div class="col-sm-4 text-center">
                    <img class="img-circle" src="images/team/ceo.jpg" width="60%">
                    <h2>Henry william</h2>
                    <p><b>CEO, Founder</b></p>

                </div>

                <div class="col-sm-4 text-center">
                    <img class="img-circle" src="images/team/1.jpg" width="60%">
                    <h2>Jacob Alexander</h2>
                    <p><b>Managing Director</b></p>

                </div>

                <div class="col-sm-4 text-center">
                    <img class="img-circle" src="images/team/2.jpg" width="60%">
                    <h2>Thomas William</h2>
                    <p><b>General Manager</b></p>

                </div>

            </div>

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
           
           <div class="col-sm-12 text-center" >
              
              <a href="#myPage"><span class="glyphicon glyphicon-chevron-up"></span></a>
               
           </div>
            
        </div>
      
      
       <div class="row text-center">
          
          <p>&copy; Copyright 2023 eShikhon.com</p>
           
       </div>
        
    </div>










</body>

</html>
