<?php 

    include('header.php');

    include_once '../config/database.php';

    $db = new Database();


    if(isset($_GET['delID'])){
        
        $did = $_GET['delID'];
        
        $isql = "select * from news where news_id = '$did'";
                
        $iresult = $db->select($isql);

        if($iresult){
            while($row = mysqli_fetch_assoc($iresult)){

                $img = $row['news_photo'];

                unlink($img);

            }
        }
        
        
        $del_sql = "delete from news where news_id = '$did'";
        
        $del_result = $db->delete($del_sql);
        
        if($del_result){
            header("location:manage_news.php");
        }else{
            
            echo  "<script>
                        alert('Process Failed!!');
                   </script>";
        }
        
        
        
        
        
        
        
    }




?>



<div class="col-md-9">

    <h4 id="conH">Manage News</h4>


    <div class="card shadow">


        <div class="card-header">

            <div class="row">

                <div class="col-md-6">

                    <h3>News List</h3>

                </div>

            </div>

        </div>

        <div class="card-body">

            <table class="table table-bordered">
                
                <tr>
                    <th>NEWS ID</th>
                    <th>NEWS Title</th>
                    <th>NEWS Image</th>
                    <th>Posted on</th>
                    <th>Action</th>
                </tr>
                
                <?php
                
                $query = "select * from news order by news_id desc";
                
                $result = $db->select($query);
                
                if($result){
                    
                    while($row = mysqli_fetch_assoc($result)){
                        
                        $datetime = strtotime($row['news_date']);
                        
                        $date = date("d M, Y", $datetime);
                        
                ?>    
                        <tr>
                           <td><?=$row['news_id']?></td>
                           <td><?=$row['news_title']?></td>
                           <td><img src="<?=$row['news_photo']?>" width="100px"></td>
                           <td><?=$date?></td>
                           <td>
                               <a href="#magicDiv<?=$row['news_id']?>" class="fancybox btn btn-info">View</a>
                               <a href="edit_news.php?id=<?=$row['news_id']?>" class="btn btn-warning">Edit</a>
                               <a href="?delID=<?=$row['news_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                           </td>

                        </tr>
                        

                        
                        <div id="magicDiv<?=$row['news_id']?>" style="display:none; width: 800px;">
                   
                           <h3><?=$row['news_title']?></h3>
                           <h5><?=$date?></h5>

                           <img src="<?=$row['news_photo']?>" width="300px">

                           <p><?=$row['news_description']?></p>

                        </div>
                          
                        
   
                        
                <?php        
                        
                    }
                    

                }
                
                
                
                
                ?>
                
                
                
                
                
                
                
                


            </table>


        </div>


    </div>

</div>










<?php 

    include('footer.php');

?>
