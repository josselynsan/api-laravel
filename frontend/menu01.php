<?php


$_SESSION['user'] = "josselynsanchez@yahoo.es";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Hojas de Estilo -->    
        <!--Archivos de javascript -->
        <!--Archivos de javascript-->







            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <!--Importante para el select-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="./dist/css/bootstrap-select.css">
            <!-- Material Design Bootstrap -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



        
  


        
        <title>Administrador</title>
    </head>
    <body>





<!-- INICIO SECTION MENU -->
<section>
     <!-- Main Content -->
     <div class="">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Administrador</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                    </ul>
                </div>

                <form class="form-inline" action="login02.php">
                            <a href="#"><i class="fa fa-user-circle mr-sm-2" aria-hidden="true"></i><?php echo $_SESSION["user"] ?></a>
                            <button class="btn btn-outline-danger my-2 my-sm-0 ml-2" type="submit">Log out</button>
                </form>


            </nav>




    </div>
        



</section>



<!-- FINAL SECTION  MENU -->









        <p align="center">

        </p>




        <div class="container mt-5">
                                        <div class="row">

                                            <!-- Earnings (Monthly) Card Example -->

                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-success shadow h-100 py-2">
                                                    <a href="usuario.php" >
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Usuarios</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    </a>                                                        
                                                </div>
                                            </div>





                                        </div>    
        </div>

        <br>
        <br>




        



        <br>
        <br>


          <br>
        <br>

	    <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                    <nav class="navbar navbar-dark bg-primary">
                                    </nav>                                

                            </tr>
                            </thead>
                        </table>

                    </div>
                </div>

            </div>




        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Importante para el select con las otras dos de abajo-->
        <script src="./dist/js/bootstrap-select.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>


      

      


    </body>



 
</html>