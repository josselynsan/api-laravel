<?php

namespace App\Http\Controllers;

Use App\Models\Usuarios;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;




class UsuarioController extends Controller
{
    //

    public function index()
    {
        return Usuarios::all();
    }

    public function show(Usuarios $usuario)
    {
        return $usuario;
    }

    public function store(Request $request)
    {
        $usuario = Usuarios::create($request->all());

        return response()->json($usuario, 201);
    }

    public function update(Request $request, Usuarios $usuario)
    {
        $usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    public function delete(Usuarios $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }




    public function index02()
    {
        $sql = 'SELECT * FROM usuarios';
        $usuario = DB::select($sql);
        return $usuario;
    }


   public function show01(Request $usuario)
    {

	
	
	$id = $usuario;




        $sql = "SELECT * FROM usuarios where id = '$id'";
        $usuario = DB::select($sql);

        	return response()->json($sql, 200);




    }



   public function index01(Request $request)
    {

	$l = 0;
	$criterio1 = "";
	
	$email = $request->get('email');
	$rol = $request->get('rol');



                            $str = $rol;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0 || $str == 0 ) {
                            } else {

                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and role = " . $str;
                                } else {
                                    $criterio1 = $criterio1 . " where role = " . $str;
            
                                }
            
                                $l = $l + 1;
            
                            }

                            $str = $email;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and email like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where email like '$str'";
            
                                }
            
                                $l = $l + 1;
            
                            }

                            if ($l <> 0) {
        
                                $sql = "select * from usuarios " . $criterio1 ." order by email asc";
                                $rq = "1";
        
                            } else {
        
                                $sql = "select * from usuarios  order by email asc";
                                $rq = "0";
        
                            }



        //$sql = "SELECT * FROM usuarios where email = '$email' and clave = '$clave'";
        $usuario = DB::select($sql);

        	return response()->json($usuario, 200);




    }



   public function login(Request $request)
    {

	
	$email = $request->get('email');
	$clave = $request->get('clave');



        $sql = "SELECT * FROM usuarios where email = '$email' and clave = '$clave'";
        $usuario = DB::select($sql);

        	return response()->json($usuario, 200);




    }




    public function indexperfils()
    {
        return Perfils::all();
    }



}





