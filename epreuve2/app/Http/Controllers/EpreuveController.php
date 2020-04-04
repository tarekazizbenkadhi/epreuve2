<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EpreuveController extends Controller
{
     public function affEp()
    {
    	/*$epreuve=[
    ['23/09/2019', '110','algo'],
    ['24/09/2019', '112 ','devweb']
];*/
/*$epreuve = DB::select('select numepreuve, datepreuve ,lieu from epreuve');
    	/*$algo = array('algo','algorithmique',3);*/
    	
    	 $epreuve = DB::table('epreuve')->select('numepreuve', 'datepreuve','lieu')->get();

        return view('affEp', ['epreuve' => $epreuve]);
    	
    }
  /*   public function store()
    {
    DB::insert('insert into epreuve (numepreuve, datepreuve,lieu) values (?, ?,?)', ['2', '15/12/198','tunis']);

    }*/

}
