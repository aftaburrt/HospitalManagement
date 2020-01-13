<html>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
 </head>
 <body>

<?php
include("func.php");
if(isset($_POST['viewmed']))
{
    $medicine_name=$_POST['medicine_name'];
    //$quantity=$_POST['quantity'];
    $query="select * from medicines
     where medicine_name='$medicine_name'";
     $result=mysqli_query($con,$query);
     echo "<div class='container-fluid' style='margin-top:50px;'>
     <div class='card'>
     <div class='card-body'><a href='pharmacy_view.php' 
     class= 'btn btn-primary'><-Go Back</a></div>
     <img src='image_for_hmsdb/3.jpg' class='card-img-top'>
     <div class='card-body' style='background-color:#3498DB;color:#ffffff;' >
     <table class='table table-hover'>
       <thead>
         <tr>
          <th >Medicine Name</th>
           <th >Medicine Quantity</th>
           
         </tr>
       </thead>
       <tbody>
       ";
     while ($row=mysqli_fetch_array($result)){
        $medicine_name=$row['medicine_name'];
        $quantity=$row['quantity'];
        
        echo "<tr>
        <td>$medicine_name</td>
        <td>$quantity</td>
        
      </tr>";

     }
     echo "</tbody></table></div></div></div>";

}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
 integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
 crossorigin="anonymous"></script>

</body>
</html>


