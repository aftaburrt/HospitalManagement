<html>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
 </head>
 <body>

<?php
include("func.php");

if(isset($_POST['stuff_search_submit']))
{
    $s_id=$_POST['search'];
    $query="select * from stuffsubmit
     where s_id='$s_id'";
     $result=mysqli_query($con,$query);
     echo "<div class='container-fluid' style='margin-top:50px;'>
     <div class='card'>
     <div class='card-body'><a href='remove_stuff.php' 
     class= 'btn btn-primary'><-Go Back</a></div>
     <img src='image_for_hmsdb/3.jpg' class='card-img-top'>
     <div class='card-body' style='background-color:#3498DB;color:#ffffff;' >
     <table class='table table-hover'>
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
       ";
     while ($row=mysqli_fetch_array($result)){
        $s_id=$row['s_id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $deptsel=$row['deptsel'];
        echo "<tr>
        <td>$s_id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$deptsel</td>
    
        
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