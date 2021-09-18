<?php


$_SESSION['user'] = "josselynsanchez@yahoo.es";

?>


<?php
        header("Content-Type: text/html;charset=utf-8");        

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Hojas de Estilo -->    
        <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js'></script>
        <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
        <!--Archivos de javascript -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">        
    
        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!--        <script src="./axios/dist/axios.min.js"></script> -->
        
        

        
        <title>Usuarios</title>
    </head>
    <body  onload="getallperfil()">





        <main class="container">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="menu.php">Usuarios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="menu01.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                        </li>                        
                    </ul>
                </div>

                <form class="form-inline" action="login02.php">
                    <a href="#"><i class="fa fa-user-circle mr-sm-2" aria-hidden="true"></i><?php echo $_SESSION['user'] ?></a>
                    <button class="btn btn-outline-danger my-2 my-sm-0 ml-2" type="submit">Log out</button>
                </form>

            </nav>





        </main>    



        <div class="container">
            <div class="row">
                <div class="col-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand" href="#"><h4>Registro de usuarios</h4></a>
                            </nav>                                

                            </tr>
                            </thead>
                        </table>   
                </div>
            </div>
        </div>


                    



    </body>

    
    
</html>


<!-- Modal  NO ERROR-->
<div class="modal fade" id="modalEventosError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
      <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
            <p class="heading lead" id="tituloError"></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>


            <div class="modal-body">
                    <div class="container">
                        <div class="form-row">
                            <div class="col-sm">
                                <th scope="col" colspan="1" class="text-center">
                                    <div class="form-group">
                                        <h5 class="modal-title" id="mensajeError1"></h5>
                                        <h5 class="modal-title" id="mensajeError2"></h5>
                                        <h5 class="modal-title" id="mensajeError3"></h5>
                                        <br>
                                        <img  src=""   id="imagenError_url" class="card-img-top"    alt="..."  >
                                    </div>
                                </th>
                            </div>
                        </div>
                    </div>    
            </div>

            <div class="modal-footer">
            </div>
      </div>
    </div>
</div>






                                                    <!-- Start Sevtion-Usuarios -->
                                                    <section class="">
                                                        <!-- Container-fluid starts -->
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!-- Authentication card start -->

                                                                        <form class="md-float-material form-material">
                                                                            <div class="">
                                                                                <div class="card-block">
                                                                                    <h5>Datos del usuario</h5>
                                                                                    <div  id="" class="">
                                                                                        <nav class="navbar navbar-light" style="background-color: #4169E1 ;">
                                                                                        </nav>
                                                                                    </div>
                                                                                    <br>

                                                                                    <input type="hidden" name="id_usuario" id="id_usuario" class="form-control">
                                                                                    <div class="row m-b-20">
                                                                                        <div class="col-md-6">

                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="email" name="email" id="email" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                        <label>Tu correo electronico</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                            



                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <select class="custom-select custom-select-lg mb-1 border border-primary" id="idgru" name="idgru">
                                                                                                            <option value=""></option>
                                                                                                        </select>
                                                                                                    <label >Rol</label>
                                                                                                    </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row m-b-20">
                                                                                        <div class="col-md-6">
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    <div class="row m-b-20">
                                                                                        
                                                                                        <div class="col-md-6">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="password" name="contrasena1" id="contrasena1" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                        <label>Tu contraseña</label>
                                                                                                    </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="col-md-6">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="password" name="contrasena2" id="contrasena2" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                        <label>Confirma la contraseña</label>
                                                                                                    </div>

                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="row m-t-30 d-flex justify-content-center">
                                                                                        
                                                                                        <div class="col-md-2 mx-2" id="btnnuevo">
                                                                                            <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="nuevoUsuario()">Nuevo</button>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="col-md-2 mx-2" id="btnbuscar">
                                                                                            <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="getUsuarios()">Buscar</button>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="col-md-2 mx-2" id="btnmodificar" style="display:none" >
                                                                                            <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="patUsuario()">Modificar</button>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="col-md-2 mx-2" id="btnguardar">
                                                                                            <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="posUsuario()">Guardar</button>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="col-md-2 mx-2" id="btnborrar">
                                                                                            <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="delUsuario()">Eliminar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <hr/>
                                                                                    <div id="mensaje"></div>


                                                                                    <!-- Hover table card start -->
                                                                                    <div class="card">
                                                                                        <div class="card-header">
                                                                                            <h5>Informe de usuarios</h5>
                                                                                            <span>Fecha : <code></code> </span>
                                                                                        </div>
                                                                                        <div class="card-block table-border-style">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover" id="tablaget34">
                                                                                                    <thead>
                                                                                                        <div class="row">
                                                                                                        </div>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hover table card end -->

                                                                                    <br>
                                                                                    <div class="row">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!-- end of form -->
                                                                </div>
                                                                <!-- end of col-sm-12 -->
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                        <!-- end of container-fluid -->
                                                    </section>
                                                    <!-- end of section-usuarios -->
                                                    
                                                    
                                                    
<script>

        function nuevoUsuario(){
          document.getElementById("id_usuario").value = "",
          document.getElementById("email").value = "",
          document.getElementById("contrasena1").value = "",
          document.getElementById("contrasena2").value = "",
          document.getElementById("idgru").value = "",
          document.getElementById("email").focus()
          document.getElementById(`btnguardar`).style.display ="inline"
          document.getElementById(`btnmodificar`).style.display = "none"
          //$('html, body').animate({scrollTop:0}, 'slow');
        
        
        
        };            
</script>


<script type="text/javascript">

        
        
        


    function getUsuarios(){

      
        
        let get01data = {

          email: document.getElementById("email").value,
          rol: document.getElementById("idgru").value,

      
        }
        
      
        axios({
          method:'POST',
          url: 'http://localhost:8000/api/usuariosall',
          data: get01data
        })
          .then(function(res) {
             if(res.status==200) {


                this.get34 = res.data;
                llenartablaget34()

		}
 
          })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
      
      
      
      
      }


function llenartablaget34(){
      document.querySelector('#tablaget34 tbody').innerHTML = ""

    for(let i = 0; i<get34.length; i++){
      document.querySelector('#tablaget34 tbody').innerHTML +=
      `<tr>
      <td>${get34[i].id}</td>
      <td>${get34[i].email}</td>
      <td>${get34[i].role}</td>
      <td><button type="button" class="btn btn-success btn-md btn-block waves-effect waves-light text-center m-b-20"  onclick="getUsuario(${get34[i].id})" style="border-radius: 20px;">Seleccionar</button></td>
      </tr>`






    }
}



  function getallperfil(){
    //alert(tokenr)
    nombreruta = ""
//  	alert ("hola")
        axios({
          method:'GET',
          url: 'http://localhost:8000/api/perfils',
        })
          .then(function(res) {
                if(res.status==200 || res.status==201) {
                  
                  this.get01 = res.data;
                  llenarselectPerfils()
                    
                }
            })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
  
  }
  
  function llenarselectPerfils(){
 
    for(let i = 0; i<get01.length; i++){
      document.querySelector('#idgru').innerHTML +=
      `<option value="${get01[i].id}">
      ${get01[i].nombre}
        </option>`
  
    }
  }
  
  



function getUsuario(id_usuario){
      axios({
        method:'GET',
        url: 'http://localhost:8000/api/usuarios/'+`${id_usuario}`,
      })
        .then(function(res) {
//          alert("hola2")
              if(res.status==200 || res.status==201) {
                
                this.get01 = res.data;


	      document.getElementById("id_usuario").value = get01.id,
	      document.getElementById("idgru").value = get01.role,
	      document.getElementById("email").value = get01.email,
	      document.getElementById("contrasena1").value = get01.clave,
	      document.getElementById(`btnguardar`).style.display ="none"
	      document.getElementById(`btnmodificar`).style.display = "inline"

                //$('html, body').animate({scrollTop:0}, 'slow');
                  
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}




function patUsuario(){


  id_usuario = document.getElementById("id_usuario").value;

  let pat01data = {

    email: document.getElementById("email").value,
    role: document.getElementById("idgru").value,
    clave: document.getElementById("contrasena1").value,

}



      axios({
        method:'patch',
        url: 'http://localhost:8000/api/usuarios/'+`${id_usuario}`,
        data: pat01data
      })
        .then(function(res) {
              if(res.status==200 || res.status==201) {
                getUsuarios();                
                this.pat01 = res.data;

                alert ("Se ha modificado el usuario ")
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}


function posUsuario(){



  let pos01data = {

    email: document.getElementById("email").value,
    role: document.getElementById("idgru").value,
    clave: document.getElementById("contrasena1").value,

}



      axios({
        method:'post',
        url: 'http://localhost:8000/api/usuarios',
        data: pos01data
      })
        .then(function(res) {
              if(res.status==200 || res.status==201) {
                getUsuarios();                
                this.pos01 = res.data;

                alert ("Se ha creado el usuario ");
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}


function delUsuario(){

    id_usuario: document.getElementById("id_usuario").value,

      axios({
        method:'delete',
        url: 'http://localhost:8000/api/usuarios/',
	data: {usuario: id_usuario},
      })
        .then(function(res) {
              if(res.status==200 || res.status==201) {
                
                getUsuarios();                

                alert ("Se ha eliminado el usuario ");



                  
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}


        
    </script>




        
