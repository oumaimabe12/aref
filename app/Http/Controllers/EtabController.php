<?php

namespace App\Http\Controllers;

use App\Models\Etab;
use Illuminate\Http\Request;

class EtabController extends Controller
{
    //

    public function index()
    {
        //
        $list = Etab::all();
        return view('etab.index', [
            'z_etab' => $list
        ]);
    }

    public function show($id)
    {
        $etab = Etab::findOrFail($id) ;
        return view('etab.show',[
            'etab'=>$etab
        ]);

    }

}
