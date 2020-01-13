<DOCTYPE html>
<?php include("func.php"); ?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/
bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<head>
    <title>Available Medicines in Pharmacy</title>
</head>
<body>
<div class="jumbotron" style="background:url('image_for_hmsdb/3.jpg')no-repeat;background-size:cover;height:300px;"></div>
 <div class="container-fluid">
 <div class="card">
    <div class="card-body" style="background-color:#3498DB;color:#ffffff ">
      <div class="row">
        <div class="col-md-3">
          <a href="admin-panel.php" class="btn btn-primary"><-Go Back</a>
        </div>
        <div class="col-md-4"><h3>Available Medicines in Pharmacy<h3></div>
        <div class="col-md-4">
          <form class="form-group" action="medicine_view.php" method="post">
          <div class="row">
            <div class="col-md-9"><input type="text" name="medicine_name" 
                class="form-control" placeholder="enter medicine name"></div>
              <div class="col-md-2"><input type="submit" 
                    name="viewmed" 
                   class="btn btn-primary" value="Search"></div></div><br>

             </form>
             
           <form class="col-md-13" action="delete_medicine.php" method="post">
                   <div class="row">
            <div class="col-md-8"><input type="text" name="medicine_name" 
                class="form-control" placeholder="enter medicine name"></div>
              <div class="col-md-1"><input type="submit" 
                    name="med_delete_submit" 
                   class="btn btn-danger" value="Remove Medicine"></div></div></form>

          </div>
         </div>
      </div>
      
    
<div class="card-body" style="background-color:#3498DB;color:#ffffff ;" >
<table class="table table-hover">
  <thead>
    <tr>
      <th >Medicine Name</th>
      <th >Medicine Quantity</th>
      
        

    </tr>
    
  </thead>
  <tbody>
  
  <?php get_medicine_details(); ?>
  
    </tbody>
    
 </table>
        



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>

</html>