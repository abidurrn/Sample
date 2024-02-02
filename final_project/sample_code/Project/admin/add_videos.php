<?php 

    include('header.php');

    include_once '../config/database.php';

    $db = new Database();

    
    if(isset($_POST['submit'])){
        
        $v_title = $_POST['v_name'];
        $v_code = $_POST['code'];
        
        date_default_timezone_set('Asia/Dhaka');
        $datetime = date("Y-m-d h:i:sa");
        
        
        $sql = "insert into videos (video_title, video_code, pdate) values ('$v_title', '$v_code', '$datetime')";
        
        $result = $db->insert($sql);
        
        if($result){
            echo  "<script>
                        alert('Video Added Successfully!!');
                        window.location.href = 'manage_videos.php';
                   </script>";
        }else{
            echo  "<script>
                        alert('Process Failed!!');
                   </script>";
        }
        
        
        
        
        
    }




?>


    <div class="col-md-9">
       
       <h4 id="conH">Add New Videos</h4>
       
       
       <form class="form-horizontal" action="" method="post">
       
       
           <div class="form-group">
              <label class="control-label col-sm-2">Video Title: </label>
              <div class="col-sm-10">
                 <input type="text" class="form-control" name="v_name" placeholder="Enter Video Title" id="v_name">

              </div>

           </div>
           
           
           <div class="form-group">
              <label class="control-label col-sm-2">Video Emded Code: </label>
              <div class="col-sm-10">
                 <input type="text" class="form-control" name="code" placeholder="Enter video's emded code" id="code">

              </div>

           </div>
           
           
           <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">

                 <input type="submit" name="submit" value="ADD VIDEOS" class="btn btn-default">

              </div>

           </div>
           
           
        </form>
       
       
       
       
       
       
    </div>












<?php 

    include('footer.php');

?>