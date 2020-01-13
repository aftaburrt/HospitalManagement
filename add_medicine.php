<DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">


</head>
 <body>
     <div class="jumbotron" style="background:url('image_for_hmsdb/3.jpg')no-repeat;background-size:cover;height:400px;"></div>
     <div class="container-fluid">
     <div class="row">
     
     
     <div class="col-md-8"> 
         <div class="card">
             <div class="card-body" style="background-color:#3498DB;color:#ffffff ">
             <div class="col-md-6">
                 <a href="admin-panel.php" class="btn btn-primary"><-Go Back</a>
             </div>
             <h3>Add  new Medicine</h3>
             </div>
             <div class="card-body">
             
                <form class="form-group" action="func.php" method="post">
                    <label>Medicine Name :</label>
                    <input type="text" name="medicine_name" class="form-control"><br>
                    <label>Medicine Quantity :</label>
                    <input type="text" name="quantity" class="form-control"><br>
                    <input type="submit" class="btn btn-primary" name="medicine_submit" value="Submit Medicine">
                </form>


             
             
             
             
             
             </div>
        </div>
     </div>
     <div class="col-md-1"> </div>
     
     </div>
      </div>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        

</body>

</html>