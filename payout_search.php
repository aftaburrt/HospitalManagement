<html>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
 </head>
 <body>

<?php
include("func.php");
if(isset($_POST['payout_search_submit']))
{
    if(isset($payment_done='payment_done')){
    $payment_done=$_POST['search']
    $query="select payment_done from pay_out";
     
     $result=mysqli_query($con,$query);
     echo "<div class='container-fluid' style='margin-top:50px;'>
     <div class='card'>
     <div class='card-body'><a href='payment_checkout.php' 
     class= 'btn btn-primary'><-Go Back</a></div>
     <img src='image_for_hmsdb/3.jpg' class='card-img-top'>
     <div class='card-body' style='background-color:#3498DB;color:#ffffff;' >
     <table class='table table-hover'>
       <thead>
         <tr>
         <th >Payment Done</th>    
         </tr>
       </thead>
       <tbody>
       ";
     while ($row=mysqli_fetch_array($result)){
        $payment_done=$row['payment_done'];
        echo "<tr>
        <td>$payment_done</td>
        </tr>";
      }
     echo "</tbody></table></div></div></div>";
    }


    else if(isset($payment_panding=$_POST['search'])){
     $query="select payment_panding from pay_out";
      
      $result=mysqli_query($con,$query);
      echo "<div class='container-fluid' style='margin-top:50px;'>
      <div class='card'>
      <div class='card-body'><a href='payment_checkout.php' 
      class= 'btn btn-primary'>Go Back</a></div>
      <img src='image_for_hmsdb/3.jpg' class='card-img-top'>
      <div class='card-body' style='background-color:#3498DB;color:#ffffff;' >
      <table class='table table-hover'>
        <thead>
          <tr>
          <th >Payment Pending</th>    
          </tr>
        </thead>
        <tbody>
        ";
      while ($row=mysqli_fetch_array($result)){
         $payment_panding=$row['payment_panding'];
         echo "<tr>
         <td>$payment_panding</td>
         </tr>";
       }
      echo "</tbody></table></div></div></div>";
     }

     else if(isset($checkout=$_POST['search'])){
      $query="select checkout from pay_out";
       
       $result=mysqli_query($con,$query);
       echo "<div class='container-fluid' style='margin-top:50px;'>
       <div class='card'>
       <div class='card-body'><a href='payment_checkout.php' 
       class= 'btn btn-primary'>Go Back</a></div>
       <img src='image_for_hmsdb/3.jpg' class='card-img-top'>
       <div class='card-body' style='background-color:#3498DB;color:#ffffff;' >
       <table class='table table-hover'>
         <thead>
           <tr>
           <th >Check Out</th>    
           </tr>
         </thead>
         <tbody>
         ";
       while ($row=mysqli_fetch_array($result)){
          $checkout=$row['checkout'];
          echo "<tr>
          <td>$checkout</td>
          </tr>";
        }
       echo "</tbody></table></div></div></div>";
      }

      else
      {
          echo "<script>alert('No patient')</script>";
          echo "<script>window.open('payment_checkout.php','_self')</script>";
      }

}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
 integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
 crossorigin="anonymous"></script>

</body>
</html>