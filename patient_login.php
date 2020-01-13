<DOCTYPE html>
<html>
 <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
 </head>
        <style type="text/css">
        #ab1:hover{cursor: pointer;}
        </style>
        <body style="background:url('image_for_hmsdb/2.jpg')no-repeat;background-size:cover; ">
        
            <div class="container" style="width:400px;margin-top:160px;">

            <div class="col-md-8">
          <a href="index.php" class="btn btn-primary"><-Go Back To Main Page</a>
        </div>
            

            
                <div class="card">
                    <img src="image_for_hmsdb/5.jpg" class="card-img-top">
                  <div class="card-body">
                  <form class="form-group" action="view_patient_details.php" method="post">
                     <label>Patient LogIn</label><br>
                         <label>ID :</label><br>
                        <input type="p_id" name="p_id" class="form-control" placeholder="enter your id"><br>

                        <label>Password :</label><br>
                        <input type="password" name="password" class="form-control" placeholder="enter password"><br>
                        <input type="submit" name="viewsubmit" id="ab1" class="btn btn-primary">

                     </form>
                  </div>
               </div>
             
        



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            Swal.fire({
            title: 'Welcome!',
            text: 'Digital Hospital Management System',
            imageUrl: 'image_for_hmsdb/1.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',

            })
        });
        </script>-->
        </body>
    </html>