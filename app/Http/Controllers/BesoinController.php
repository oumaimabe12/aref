<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use App\Models\Etatbesoin;
use App\Models\Prof;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BesoinController extends Controller
{
    //
    public function index()
    {
        //$list = Besoin::all();
        $list = DB::table('etabs')
                    ->select("CD_ETAB", "NOM_ETABA")
                    ->where("CD_NETAB", ">", 200)
                    ->distinct()->get();
        //dd($list);
        return view('besoin.index', [
            'besoin' => $list
        ]);
    }

    public function srch(Request $request)
    {
        $list = Besoin::where("CD_ETAB", "=", $request->etab)->get();
        //dd($list);
        $etat = array();
        foreach ($list as $key => $value) {
            $nbprof = Prof::select('Doti')
                            ->where('Code_Et', "=", $value->CD_ETAB)
                            ->where('Matiere', "=", $value->Code_Mat)
                            ->count();
            $etat[]=[
                'etab' => $value->CD_ETAB,
                'mat' => $value->Code_Mat,
                'etat' => $value->Nb_Prof - $nbprof
            ];
            $besoin = new Etatbesoin();
            $besoin->etab = $value->CD_ETAB;
            $besoin->mat = $value->Code_Mat;
            $besoin->besoin = $value->Nb_Prof;
            $besoin->real =  $nbprof;
            $besoin->etat = round($value->Nb_Prof - $nbprof, 2);
            $besoin->save();

        }
       // dd($etat);
        return view('besoin.lst', [
            'besoin' => $list
        ]);
    }
}
