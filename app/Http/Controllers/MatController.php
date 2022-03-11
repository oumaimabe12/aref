<?php

namespace App\Http\Controllers;

use App\Models\Mat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{
    //
    public function index()
    {
        //
        //$matiere = Mat::paginate(10);
       // return view('mat.index', compact('matiere'));

        $list = Mat::all();
        return view('mat.index', [
            'matiere' => $list
        ]);
    }

}
