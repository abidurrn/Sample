<?php 

    include('header.php');


    include_once '../config/database.php';

    $db = new Database();




    if(isset($_GET['delID'])){
        
        $did = $_GET['delID'];
        
        
        $dsql = "delete from admin where id = '$did'";
        
        $res = $db->delete($dsql);
        
        if($res){
            
            header("location: manage_admin.php");
            
        }else{
            
            echo  "<script>
                        alert('Delete Process Failed...');
                   </script>";
        }
        
        
    }



?>


<div class="col-md-9">

    <h4 id="conH">Manage Admin</h4>
    
    <div class="card shadow">
       
       <a href="add_admin.php" class="btn btn-info">Add New Admin</a>
       
       
       <div class="card-header">
          
          <div class="row">
              <div class="col-md-6">
                 
                 <h3>All Admin</h3>
                  
              </div>
          </div>
           
       </div>
       
       
       <div class="card-body">
          
          <table class="table table-bordered">
             
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>E-mail</th>
                 <th>Phone</th>
                 <th>Address</th>
                 <th>Action</th>
             </tr>
             
             
             
             <?php
              
              
              $sql = "select * from admin";
              
              $result = $db->select($sql);
              
              if($result){
                  
                  while($row = mysqli_fetch_assoc($result)){
               
            ?>
                      
                    <tr>
                         <td><?=$row['id']?></td>
                         <td><?=$row['name']?></td>
                         <td><?=$row['email']?></td>
                         <td><?=$row['phone']?></td>
                         <td><?=$row['address']?></td>
                         <td>
                            
                            <?php
                            
                                if($row['id'] == 1){
                                    
                                    echo "<a href='' class='btn btn-danger disabled'>Delete</a>";
                                }else{
                                    
                            ?>        
                                   
                                    <a href="?delID=<?=$row['id']?>" class='btn btn-danger' onclick="return confirm('Are you sure?')">Delete</a>

                            <?php
                                    
                                }
                
                             
                            ?>
                            
                            
                            
                            
                            
                            
                            
                             
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
