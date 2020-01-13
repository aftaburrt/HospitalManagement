<DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">


</head>
 <body>

 <div class="col-md-8">
          <a href="index.php" class="btn btn-primary"><-Go Back To Main Page</a>
        </div>
     <div class="jumbotron" style="background:url('image_for_hmsdb/12.jpg')no-repeat;background-size:cover;height:400px;"></div>
     <div class="container-fluid">
     <div class="row">
     
     
     <div class="col-md-8"> 
         <div class="card">
             <div class="card-body" style="background-color:#3498DB;color:#ffffff ">
             <h3>Book an Appointment</h3>
             </div>
             <div class="card-body">
             
                <form class="form-group" action="func.php" method="post">
                    <label>Patient ID :</label>
                    <input type="text" name="p_id" class="form-control" placeholder="enter patient phone number as a referral id"><br>
                    <label>Patient Password :</label>
                    <input type="text" name="password" class="form-control" placeholder="enter patient phone number as a referral pass"><br>
                    <label>First Name :</label>
                    <input type="text" name="fname" class="form-control"><br>
                    <label>Last Name :</label>
                    <input type="text" name="lname" class="form-control"><br>
                    <label>Email ID :</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Contact :</label>
                    <input type="text" name="contact" class="form-control"><br>
                    <label>Doctor Appointment :</label>
                    <select class="form-control" name="docapp">
                        <option value="Dr Mahmud From 6pm to 8pm">Dr Mahmud From 6pm to 8pm</opotion>
                        <option value="Dr Mamun From 4pm to 6pm">Dr Mamun From 4pm to 6pm</opotion>
                    </select><br>
                    <input type="submit" class="btn btn-primary" name="online_pat_submit" value="Submit Appointmennt">
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