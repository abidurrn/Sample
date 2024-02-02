<?php 

    include('header.php');

    include_once '../config/database.php';

    $db = new Database();


    if(isset($_GET['delID'])){
        
        $did = $_GET['delID'];
        
        $del_sql = "delete from videos where video_id = '$did'";
        
        $del_result = $db->delete($del_sql);
        
        if($del_result){
            header("location:manage_videos.php");
        }else{
            
            echo  "<script>
                        alert('Process Failed!!');
                   </script>";
        }
        
  
        
    }




?>


    <div class="col-md-9">
       
       <h4 id="conH">Manage Videos</h4>
       
       
       <div class="card shadow">
          
          
          <div class="card-header">
             
             <div class="row">
                
                <div class="col-md-6">
                   
                   <h3>Videos List</h3>
                    
                </div>
                 
             </div>
              
          </div>
          
          <div class="card-body">
             
             <table class="table table-bordered">
                
                <tr>
                    <th>Video ID</th>
                    <th>Video Title</th>
                    <th>Posted Date</th>
                    <th>Action</th>
                </tr>
                
                <?php
                 
                 
                $sql = "select * from videos order by video_id desc";
                
                $result = $db->select($sql);
                 
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        
                        
                        $datetime = strtotime($row['pdate']);
                        
                        $date = date("d M, Y", $datetime);
                        
                ?>
                        
                    <tr>

                       <td><?=$row['video_id']?></td>
                       <td><?=$row['video_title']?></td>
                       <td><?=$date?></td>
                       <td>
                           <a href="?delID=<?=$row['video_id']?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                       </td>


                    </tr>        
                        
                        
                        
                <?php        
                        
                    }
                }
                 
                 
                 ?> 
                
                
                
                 
             </table>
              
          </div>
           
       </div>






















<?php 

    include('footer.php');

?>