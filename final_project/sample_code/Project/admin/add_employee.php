<?php 

    include('header.php');

?>



    <div class="col-md-9">
       
       <h4 id="conH">Add New Employee</h4>
       
       
       <form class="form-horizontal" action="" method="" enctype="multipart/form-data">
          
          <div class="form-group">
             <label class="control-label col-sm-2">Name: </label>
             
             <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Admin Name">

             </div>
              
          </div>
          
          <div class="form-group">
             <label class="control-label col-sm-2">E-mail: </label>
             
             <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Admin E-mail">

             </div>
              
          </div>
          
          <div class="form-group">
             <label class="control-label col-sm-2">Phone: </label>
             
             <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Admin Phone Number">

             </div>
              
          </div>
          
          <div class="form-group">
             <label class="control-label col-sm-2">Address: </label>
             
             <div class="col-sm-10">
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Admin Address">

             </div>
              
          </div>
          
          <div class="form-group">
             <label class="control-label col-sm-2">Position: </label>
             
             <div class="col-sm-10">
                <input type="text" class="form-control" name="position" id="position" placeholder="Enter Admin Position">

             </div>
              
          </div>
          
          <div class="form-group">
             <label class="control-label col-sm-2">Image: </label>
             
             <div class="col-sm-10">
                <input type="file" class="form-control" name="photo" id="photo">

             </div>
              
          </div>
          
          <div class="form-group">
             
             <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" name="submit" value="A D D">

             </div>
              
          </div>
           
       </form>
    
    

    
    
    </div>






<?php 

    include('footer.php');

?>