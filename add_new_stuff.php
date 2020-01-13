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
             <h3>Add a new Stuff</h3>
             </div>
             <div class="card-body">
             
                <form class="form-group" action="func.php" method="post">
                    <label>Stuff ID :</label>
                    <input type="text" name="s_id" class="form-control"><br>
                    <label>First Name :</label>
                    <input type="text" name="fname" class="form-control"><br>
                    <label>Last Name :</label>
                    <input type="text" name="lname" class="form-control"><br>
                    <label>Email ID :</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Contact :</label>
                    <input type="text" name="contact" class="form-control"><br>
                    <label>Department :</label>
                    <select class="form-control" name="deptsel">
                        <option value="dept_1">dept_1</opotion>
                        <option value="dept_2">dept_2</opotion>
                    </select><br>
                    <input type="submit" class="btn btn-primary" name="staff_submit" value="Submit Stuff">
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
        <!--Sweet alert js
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            Swal.fire({
            position: 'top-middle',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
})
        });
        </script>-->

</body>

</html>