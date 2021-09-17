<?php

namespace App\Http\Controllers;

Use App\Models\Perfil;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class PefilsController extends Controller
{

 public function indexperfils()
    {
        return Perfil::all();
    }


    //
}
