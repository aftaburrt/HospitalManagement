<?php

$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query= "select * from logintb where username='$username' and password='$password' ";
    $result=mysqli_query($con,$query);
    //var_dump(mysqli_num_rows($result));

    if(mysqli_num_rows($result)==1)
    {
        header("Location: admin-panel.php");
    }
    else
    {
        echo "<script>alert('Error login')</script>";
        echo "<script>window.open('adminlogin.php','_self')</script>";
    }
 


}





if(isset($_POST['pat_submit']))
{
    $p_id=$_POST['p_id'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(p_id,password,fname,lname,email,contact,docapp)
    values($p_id,'$password','$fname','$lname','$email', $contact,'$docapp')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        
        echo "<script>alert('Appointment Registered')</script>";
        echo "<script>window.open('patient_regi.php','_self')</script>";

    }
    
}

if(isset($_POST['online_pat_submit']))
{
    $p_id=$_POST['p_id'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(p_id,password,fname,lname,email,contact,docapp)
    values($p_id,'$password','$fname','$lname','$email', $contact,'$docapp')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        
        echo "<script>alert('Appointment Registered')</script>";
        echo "<script>window.open('online_patient_regi.php','_self')</script>";

    }
    
}

function get_patient_details()
{
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
        $p_id=$row['p_id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];
        echo "<tr>
      
        <td>$p_id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
      </tr>";


    }

}

function get_payment_checkout_details()
{
    global $con;
    $query="select * from pay_out";
    $result=mysqli_query($con,$query);

    

    while ($row=mysqli_fetch_array($result)) {
        $payment_done=$row['payment_done'];
        $payment_panding=$row['payment_panding'];
        $checkout=$row['checkout'];
        echo "<tr>
      
        <td>$payment_done</td>
        <td>$payment_panding</td>
        <td>$checkout</td>
      </tr>";


    }

}

if(isset($_POST['staff_submit']))
{
    $s_id=$_POST['s_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $deptsel=$_POST['deptsel'];
    $query="insert into stuffsubmit(s_id,fname,lname,email,contact,deptsel)
    values($s_id,'$fname','$lname','$email', $contact,'$deptsel')";
    $result=mysqli_query($con,$query);
    if($result)
    {

        echo "<script>alert('Stuff Registered')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";

    }
}

function get_stuff_details()
{
    global $con;
    $query="select * from stuffsubmit";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
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
}


if(isset($_POST['medicine_submit']))
{
    $medicine_name=$_POST['medicine_name'];
    $quantity=$_POST['quantity'];
    $query="insert into medicines(medicine_name,quantity)
    values('$medicine_name',$quantity)";
    $result=mysqli_query($con,$query);
    if($result)
    {
        
        echo "<script>alert('Medicine Registered')</script>";
        echo "<script>window.open('pharmacy_view.php','_self')</script>";

    }
    
}

function get_medicine_details()
{
    global $con;
    $query="select * from medicines";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)) {
        $medicine_name=$row['medicine_name'];
        $quantity=$row['quantity'];
        echo "<tr>
      
        
        <td>$medicine_name</td>
        <td>$quantity</td>
        <td>
        <form class='col-md-13' action='delete_medicine.php' method='post'>
                   <div class='row'>
            <div class='col-md-8'><input type='text' name='medicine_name' 
                class='form-control' hidden value='$medicine_name' placeholder='$medicine_name'></div>
              <div class='col-md-1'> <button type='submit'
              name='med_delete_submit' 
             class='btn btn-danger'>Delete</button></div></div></form>
              </td>
           

        <td><button>Edit</button></td>
       
    
      </tr>";
    }
}




?>