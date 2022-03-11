<?php

namespace App\Http\Controllers;

use App\Models\Takalif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TakalifController extends Controller
{
    //
    public function index()
    {
        //
        $list = Takalif::all();
        return view('takalif.index', [
            'takalif' => $list
        ]);
    }
    public function create()
    {
        //
        $mat = DB::table('matiere')->get();
        $tak = DB::table('t_takalif')->get();
        return view('takalif.ajout',[
            'tak' => $tak,
            'mat' => $mat
        ]);
    }

    public function show($Doti)
    {
        $takalif = Takalif::findOrFail($Doti) ;
        return view('takalif.show',[
            'takalif'=>$takalif
        ]);

    }

    public function store(Request $request)
    {
      $validatedata=$request->validate([
        'N_Tak'=>'required',
        'Date_Tak'=>'required',
        'Typ_Tak'=>'required',
        'Doti'=>'min:0|required|max:10',
        'Mat_En'=>'required|not_in:0',
        'Cycl_En1'=>'required|not_in:0',
        'Et_Fon1'=>'required',
        'Dat_Deb1'=>'min:2|required',
        'Dat_Fin1'=>'required',
        'Pr_Et1'=>'required',
        'NbHEt1'=>'required',
        'Obj_Tak1'=>'required'
     ]);
     // dd($request->all());

     $takalif = new Takalif();
     $takalif->N_Tak=$request->N_Tak;
     $takalif->Date_Tak=$request->Date_Tak;
     $takalif->Typ_Tak=$request->Typ_Tak;
     $takalif->Doti=$request->Doti;
     $takalif->Mat_En=$request->Mat_En;
     $takalif->Cycl_En1=$request->Cycl_En1;
     $takalif->Et_Fon1=$request->Et_Fon1;
     $takalif->Dat_Deb1=$request->Dat_Deb1;
     $takalif->Dat_Fin1=$request->Dat_Fin1;
     $takalif->Pr_Et1=$request->Pr_Et1;
     $takalif->NbHEt1=$request->NbHEt1;
     $takalif->Obj_Tak1=$request->Obj_Tak1;

     $takalif->save();
        $request->session()->flash('status','takalif est ajouté avec succés!');
        return redirect()->route('takalif.index');

    }

    public function edit($Doti )
    {
        $takalif = Takalif::findOrFail($Doti) ;
        $mat = DB::table('matiere')->get();
        return view('takalif.modifier',[
       'takalif' => $takalif,
       'mat' => $mat 
        ]);
 
    }
    public function update(Request $request, $Doti)
    {
        $takalif = Takalif::findOrFail($Doti) ;

         // dd($request->all());
         $takalif->N_Tak=$request->N_Tak;
         $takalif->Date_Tak=$request->Date_Tak;
         $takalif->Typ_Tak=$request->Typ_Tak;
         $takalif->Doti=$request->Doti;
         $takalif->Mat_En=$request->Mat_En;
         $takalif->Cycl_En1=$request->Cycl_En1;
         $takalif->Et_Fon1=$request->Et_Fon1;
         $takalif->Dat_Deb1=$request->Dat_Deb1;
         $takalif->Dat_Fin1=$request->Dat_Fin1;
         $takalif->Pr_Et1=$request->Pr_Et1;
         $takalif->NbHEt1=$request->NbHEt1;
         $takalif->Obj_Tak1=$request->Obj_Tak1;
    
         $takalif->update();

         if ($takalif->save()){
           return redirect('/takalif')->with('status','Successfully Updated');
        }
        else
        {
           // handle error.
       }}
    public function destroy(Request $request ,$Doti)
    {
        //
        $takalif=Takalif::findOrFail($Doti);
        $takalif->delete();

        $request->session()->flash('status',' SUCCESSFULLY DELETED !');
        return redirect()->route('takalif.index');

    }

}
