<?php
date_default_timezone_set('America/Bogota');

?>

<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">





<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

        
	<!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- <script src="./axios/dist/axios.min.js"></script> -->






<script>

function cargaModal(){
    //alert(codpre);
    //idvalor = "codpreeli";
    //$(codpreeli).val() = codpre;
    //document.getElementById(idvalor).value = codpre;
    //$('#eliminaModal').modal("show");
    $('#posModal').modal({backdrop: 'static', keyboard: false});
};


</script>


        <title>Ingreso</title>


    </head>
    <body onload="cargaModal()">




    </body>


</html>




<!-- Modal Ingreso Pos-->
<div class="modal fade bd-example-modal-sm" id="posModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <div class="modal-content">

        <div class="modal-header bg-primary text-white">
            <p class="heading lead" id="exampleModalLabel"><strong>Ingreso</strong></p>
            <p class="heading lead" id="exampleModalLabel"><strong></strong></p>
        </div>


      <div class="modal-body">
               <div class="form-row">
                    <div class="col-sm">
                        <th scope="col" colspan="1" class="text-center">
                            <div class="form-group">
                                <label >Usuario</label>
                                <input type="text" id="user" name="user" class="form-control" value="" >
                    
                            </div>
                        </th>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-sm">
                        <th scope="col" colspan="1" class="text-center">
                            <div class="form-group">
                                <label >Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" value="" >
                            </div>
                        </th>
                    </div>
                </div>


      </div>
                    <div class="col-sm">
                        <th scope="col" colspan="1" class="text-center">
                            <div class="form-group">
                            <p class="text-justify"><h5 name="codmen" id="codmen"></h5></p>
                            </div>
                        </th>
                    </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary" style="border-radius: 20px;" onclick="getLogin()" >Ingresar</button>
      </div>
    </div>
  </div>
</div>

        <br>
        <br>


<script>

function getLogin(){


let get01data = {
 email: document.getElementById("user").value,
 clave: document.getElementById("password").value,
}

//tipusu = document.getElementById("tipusu").value;
//alert (tipusu);

tipusu = 1;

if(tipusu == '1'){

       axios({
         method:'POST',
         url: 'http://localhost:8000/api/usuarios/login',
         data: get01data
       })

           .then(function(res) {
             if(res.status==200) {

		if (res.data[0].role == 1){
//			alert ("SU PERFIL ES ADMINISTRADOR")
                                   window.location.replace("http://localhost/menu01.php");
		}
		if (res.data[0].role == 2){
//			alert ("SU PERFIL ES USUARIO BASICO")
                                   window.location.replace("http://localhost/menu02.php");
		}

               }

             //console.log(res);
           })
           .catch(function(err) {
           })
           .then(function() {
             //
           });

   }





}



</script>

