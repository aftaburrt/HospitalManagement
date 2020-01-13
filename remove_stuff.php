<DOCTYPE html>
<?php include("func.php"); ?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/
bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<head>
    <title>Stuff List</title>
</head>
<body>
<div class="jumbotron" style="background:url('image_for_hmsdb/3.jpg')no-repeat;background-size:cover;height:300px;"></div>
 <div class="container-fluid">
 <div class="card">
    <div class="card-body" style="background-color:#3498DB;color:#ffffff ">
      <div class="row">
        <div class="col-md-4">
          <a href="admin-panel.php" class="btn btn-primary"><-Go Back</a>
        </div>
        <div class="col-md-4"><h3>Stuff List<h3></div>
        <div class="col-md-4">
          <form class="form-group" action="stuff_search.php" method="post">
          <div class="row">
            <div class="col-md-7"><input type="text" name="search" 
                class="form-control" placeholder="enter id"></div>
              <div class="col-md-2"><input type="submit" 
                    name="stuff_search_submit" 
                   class="btn btn-primary" value="Search"></div></div><br>

             </form>
             
           <form class="form-group" action="delete_stuff.php" method="post">
                   <div class="row">
            <div class="col-md-6"><input type="text" name="search" 
                class="form-control" placeholder="enter id"></div>
              <div class="col-md-2"><input type="submit" 
                    name="stuff_delete_submit" 
                   class="btn btn-danger" value="Remove Stuff"></div></div></form>

          </div>
         </div>
      </div>
      
    
<div class="card-body" style="background-color:#3498DB;color:#ffffff ;" >
<table class="table table-hover">
  <thead>
    <tr>
      <th >Stuff ID</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Email ID</th>
      <th >Contact</th>
      <th >Department </th>
     
      
      

    </tr>
    
  </thead>
  <tbody>
  
  <?php get_stuff_details(); ?>
  
    </tbody>
    
 </table>
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>

</html>