<?php 

    include('header.php');


    include_once '../config/database.php';

    $db = new Database();


    if(isset($_GET['delID'])){
        
        $did = $_GET['delID'];
        
        
        $query = "delete from feedback where id = '$did'";
        
        $res = $db->delete($query);
        
        
        if($res){
            
            echo  "<script>
                        alert('Message Deleted!!');
                        window.location.href = 'show_feedbacks.php';
                   </script>";
            
        }else{
            
            echo  "<script>
                        alert('Process Failed!!');
                   </script>";
            
        }
        
        
        
        
    }
    



?>




    <div class="col-md-9">
       
       <h4 id="conH">Feedbacks</h4>
       
       <div class="card shadow">
          
          <div class="card-body">
             
             <table class="table table-bordered">
                
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Website</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                
                
                <?php
                 
                
                $sql = "select * from feedback order by id desc";
                 
                $result = $db->select($sql);
                 
                if($result){
                    
                    while($row = mysqli_fetch_assoc($result)){
                        
                ?>
                        
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['website']?></td>
                    <td><?=$row['message']?></td>
                    <td>
                        <a href="?delID=<?=$row['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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







<?php 

    include('footer.php');

?>