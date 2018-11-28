<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Users;
use App\Contact;
use DB;

class contactController extends Controller
{
    public function insert(Request $request){

		$prueba=new Contact;
        $prueba->nombre=$request -> input('nombre');
        $prueba->email=$request -> input('email');
        $prueba->mensaje=$request -> input('mensaje');
		$prueba->save();

		return redirect("/");
        }
}
