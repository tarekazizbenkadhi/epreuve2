<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{

    public function affMat()
    {
  $matiere = DB::select('select codemat, libelle, coef from matiere');
    	/*$algo = array('algo','algorithmique',3);*/
    	return view('affMat')->with('matiere',$matiere);;
    }
      public function store()
    {
    DB::insert('insert into matiere (codemat, libelle,coef) values (?, ?,?)', ['algo', 'algorithmique','3']);
    }
}
