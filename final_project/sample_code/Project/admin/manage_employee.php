<?php 

    include('header.php');

?>


<div class="col-md-9">

    <h4 id="conH">Manage Employee</h4>
    
    <div class="card shadow">
       
       <a href="add_employee.php" class="btn btn-info">Add New Employee</a>
       
       
       <div class="card-header">
          
          <div class="row">
              <div class="col-md-6">
                 
                 <h3>All Employee</h3>
                  
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
                 <th>Position</th>
                 <th>Image</th>
                 <th>Action</th>
             </tr>
             
             <tr>
                 <td>01</td>
                 <td>Atish</td>
                 <td>atish@gmail.com</td>
                 <td>012454545454</td>
                 <td>Dhaka</td>
                 <td>Graphics Designer</td>
                 <td><img src="../images/team/3.jpg" width="100px"></td>
                 <td>
                     <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                 </td>
             </tr>
             
             <tr>
                 <td>02</td>
                 <td>Atish</td>
                 <td>atish@gmail.com</td>
                 <td>012454545454</td>
                 <td>Dhaka</td>
                 <td>Graphics Designer</td>
                 <td><img src="../images/team/3.jpg" width="100px"></td>
                 
                 <td>
                     <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                 </td>
             </tr>
             
             <tr>
                 <td>03</td>
                 <td>Atish</td>
                 <td>atish@gmail.com</td>
                 <td>012454545454</td>
                 <td>Dhaka</td>
                 <td>Graphics Designer</td>
                 <td><img src="../images/team/3.jpg" width="100px"></td>
                 <td>
                     <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                 </td>
             </tr>
              
          </table>
           
       </div>
        
    </div>










</div>









<?php 

    include('footer.php');

?>
