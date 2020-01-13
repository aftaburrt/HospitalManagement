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
        
            <div class="container" style="width:400px;margin-top:220px;">


            

            
                <div class="card">
                    <img src="image_for_hmsdb/6.jpg" class="card-img-top">
                  <div class="card-body">
                  <li><a href="adminlogin.php" >Admin Login</a></li> 
                  <li><a href="patient_login.php" >Patient Login</a></li>
                 <li><a href="online_patient_regi.php" >Patient Registration</a></li>
                 <li><a href="online_pharmacy_view.php" >Pharmacy</a></li>
                  <li class="last"><a href="contact_with_us.php">About US</a></li></ul>
                            
                </div>
               </div>
            </div>
        



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
        </script>
        </body>
    </html>