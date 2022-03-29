<?php

namespace App\Http\Controllers;

use App\Models\Matb;
use App\Models\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class MatbController extends Controller
{
    //
    public function index()
    {
        $list = DB::table('matiere')
                    ->select("Code_Mat", "Designation")
                    ->distinct()->get();
        //dd($list);

        return view('matb.index', [
            'matb' => $list
        ]);
    }

    public function srchmt(Request $request)
    {
        $list = Matb::where("Code_Mat", "=", $request->matiere)->get();
        //dd($list);
        $etat = array();
        /* foreach ($list as $key => $value) {
            $nbprof = Prof::select('Doti')
                            ->where('Code_Et', "=", $value->CD_ETAB)
                            ->where('Matiere', "=", $value->Code_Mat)
                            ->count();
            $etat[]=[
                'etab' => $value->CD_ETAB,
                'mat' => $value->Code_Mat,
                'etat' => $value->Nb_Prof - $nbprof
            ];
            $matb = new Matb();
            $matb->etab = $value->CD_ETAB;
            $matb->mat = $value->Code_Mat;
            $matb->matb = $value->Nb_Prof;
            $matb->real =  $nbprof;
            $matb->etat = round($value->Nb_Prof - $nbprof, 2);
            $matb->save();

        } */
       // dd($etat);
        return view('matb.list', [
            'matb' => $list
        ]);
    }
}
