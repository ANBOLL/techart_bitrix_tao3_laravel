<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use \App\Models\VacantiesModel;

class VacantiesController extends Controller
{
    public function vacanties(Request $request){
        return view('vacanties');
    } 
    public static function vacantiesId($id){
        $item = \TAO::datatype('vacanties')->where('id', $id)->get();
        return view('datatypes.vacanties.page', ['item' => $item]);
    }
}
