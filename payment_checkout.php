<DOCTYPE html>
<?php include("func.php"); ?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/
bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">

<head>
    <title>Payment/Checkout</title>
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
        <div class="col-md-4"><h3>Payment/Checkout<h3></div>
        <div class="col-md-4">
          <form class="form-group" action="payout_search.php" method="post">
          <div class="row">
            <div class="col-md-8"><input type="text" name="search" 
                class="form-control" placeholder="enter name"></div>
              <div class="col-md-2"><input type="submit" 
                    name="payout_search_submit" 
                   class="btn btn-primary" value="Search"></div></div>
           </form>

          </div>
        </div>
      </div>
      
    
<div class="card-body" style="background-color:#3498DB;color:#ffffff ;" >
<table class="table table-hover">
  <thead>
    <tr>
      <th >Payment Done</th>
      <th >Payment Pending</th>
      <th >Checkouts</th>
      
    </tr>
  </thead>
  <tbody>
  <?php get_payment_checkout_details(); ?>
    </tbody>
 </table>
 </div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>

</html>