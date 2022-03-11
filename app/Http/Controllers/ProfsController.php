<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;
use Illuminate\Http\Str;
use Illuminate\Support\Facades\DB;


class ProfsController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Prof::all();
        return view('prof.index', [
            'profs' => $list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mat = DB::table('matiere')->get();
        return view('prof.formulaire',[
            'mat' => $mat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      // $prof=  Prof::create($request->all());
      $validatedata=$request->validate([
        'Cycle_For'=>'required|not_in:0',
        'Cycle_Exe'=>'required|not_in:0',
        'Code_Et'=>'min:2|required',
        'Doti'=>'min:0|required|max:10',
        'Nom'=>'required|max:100',
        'NomFr'=>'required',
        'SexePr'=>'required|not_in:0',
        'Dat_Nais'=>'min:2|required',
        'Matiere'=>'required|not_in:0',
        'Dat_Rec'=>'required',
        'Dat_Aff_Del'=>'required',
        'Dat_aff_Et'=>'required',
        'CIN'=>'required',
        'Avctif'=>'required|numeric',
        'ObsAc'=>'required',
        'Obs1'=>'required',
        'Obs2'=>'required',
        'Dat_Aff_Aca'=>'required',
        'F19'=>'required',
        'F20'=>'required'
     ]);

     // dd($request->all());
     $prof = new Prof();
     $prof->Cycle_For=$request->Cycle_For;
     $prof->Cycle_Exe=$request->Cycle_Exe;
     $prof->Code_Et=$request->Code_Et;
     $prof->Doti=$request->Doti;
     $prof->Nom=$request->Nom;
     $prof->NomFr=$request->NomFr;
     $prof->SexePr=$request->SexePr;
     $prof->Dat_Nais=$request->Dat_Nais;
     $prof->Matiere=$request->Matiere;
     $prof->Dat_Rec=$request->Dat_Rec;
     $prof->Dat_Aff_Del=$request->Dat_Aff_Del;
     $prof->Dat_aff_Et=$request->Dat_aff_Et;
     $prof->CIN=$request->CIN;
     $prof->Avctif=true;
     $prof->ObsAc=$request->ObsAc;
     $prof->Obs1=$request->Obs1;
     $prof->Obs2=$request->Obs2;
     $prof->Dat_Aff_Aca=$request->Dat_Aff_Aca;
     $prof->F19=$request->F19;
     $prof->F20=$request->F20;

     $prof->save();

      
        $request->session()->flash('status','prof est ajouté avec succés!');
        return redirect()->route('prof.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prof = Prof::findOrFail($id) ;
        return view('prof.show',[
            'prof'=>$prof
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        //return Prof::find($id)

        $prof = Prof::findOrFail($id);
        $mat = DB::table('matiere')->get();
        //dd($prof);
        return view('prof.edit',[
       'prof' => $prof,
       'mat' => $mat 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prof = Prof::findOrFail($id) ;

         // dd($request->all());
         $prof->Cycle_For=$request->Cycle_For;
         $prof->Cycle_Exe=$request->Cycle_Exe;
         $prof->Code_Et=$request->Code_Et;
         $prof->Doti=$request->Doti;
         $prof->Nom=$request->Nom;
         $prof->NomFr=$request->NomFr;
         $prof->SexePr=$request->SexePr;
         $prof->Dat_Nais=$request->Dat_Nais;
         $prof->Matiere=$request->Matiere;
         $prof->Dat_Rec=$request->Dat_Rec;
         $prof->Dat_Aff_Del=$request->Dat_Aff_Del;
         $prof->Dat_aff_Et=$request->Dat_aff_Et;
         $prof->CIN=$request->CIN;
         $prof->Avctif=true;
         $prof->ObsAc=$request->ObsAc;
         $prof->Obs1=$request->Obs1;
         $prof->Obs2=$request->Obs2;
         $prof->Dat_Aff_Aca=$request->Dat_Aff_Aca;
         $prof->F19=$request->F19;
         $prof->F20=$request->F20;
    
         $prof->update();

         if ($prof->save()){
           return redirect('/prof')->with('status','Prof Updated Successfully ');
        }
        else
        {
           // handle error.
       }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

