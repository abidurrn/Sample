<?php 

    include('header.php');

    include_once '../config/database.php';

    $db = new Database();

?>


            <div class="col-md-9">


                <div class="row text-center">

                    <h2><b>Welcome to</b></h2>
                    <img src="../images/logo-full-final.png" alt="company logo" width="40%">

                </div>

                <div class="row">

                    <div class="col-sm-4 text-center">
                        
                        
                        <?php
                        
                        $sql = "select count(*) as NbrOfAdmin  from admin";
                        
                        $result = $db->select($sql);
                        
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>        
                                <div class="hdiv">
                                    <p><b>Total Admin</b></p>
                                    <p><b><?=$row['NbrOfAdmin']?></b></p>
                                </div>
                        <?php        
                            }
                        }
                        
                        
                        ?>


                    </div>

                    <div class="col-sm-4 text-center">

                        <div class="hdiv">
                            <p><b>Total Employees</b></p>
                            <p><b>250</b></p>
                        </div>

                    </div>

                    <div class="col-sm-4 text-center">

                        <?php
                        
                        $sql = "select count(*) as NbrOfNews from news";
                        
                        $result = $db->select($sql);
                        
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>        
                                <div class="hdiv">
                                    <p><b>Total News</b></p>
                                    <p><b><?=$row['NbrOfNews']?></b></p>
                                </div>
                        <?php        
                            }
                        }
                        
                        
                        ?>
                    </div>

                    <div class="col-sm-4 text-center">

                        <?php
                        
                        $sql = "select count(*) as NbrOfVideos from videos";
                        
                        $result = $db->select($sql);
                        
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>        
                                <div class="hdiv">
                                    <p><b>Total Videos</b></p>
                                    <p><b><?=$row['NbrOfVideos']?></b></p>
                                </div>
                        <?php        
                            }
                        }
                        
                        
                        ?>

                    </div>

                    <div class="col-sm-4 text-center">

                        <?php
                        
                        $sql = "select count(*) as NbrOfFeedbacks from feedback";
                        
                        $result = $db->select($sql);
                        
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>        
                                <div class="hdiv">
                                    <p><b>Total Messages</b></p>
                                    <p><b><?=$row['NbrOfFeedbacks']?></b></p>
                                </div>
                        <?php        
                            }
                        }
                        
                        
                        ?>

                    </div>

                    <div class="col-sm-4 text-center">

                        <div class="hdiv">
                            <p><b>Total Subscriber</b></p>
                            <p><b>500</b></p>
                        </div>

                    </div>

                </div>



            </div>

        
    
    
<?php 

    include('footer.php');

?>
