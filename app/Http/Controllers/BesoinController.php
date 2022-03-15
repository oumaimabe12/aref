<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BesoinController extends Controller
{
    //
    public function index(){
        $users=DB::select('SELECT Z_etab.CD_COM, R_NEFSTAT.CD_CYCLE, Z_etab.CD_ETAB, Z_etab.NOM_ETABA, Matiere.Code_Mat, Matiere.Designation,
        Sum(IIf([matiere].[Code_Mat]="0023",[Nb_Clas],0)) AS NB_Cl_Sc, 
        Sum([Nb_Clas]*[NbHeure]) AS Heure_Mat, 
        IIf([matiere].[code_mat]="0023" And [cd_cycle]="3A",[NB_Cl_Sc]/3,[Heure_Mat]/IIf([matiere].[code_mat]="0026",18,IIf([cd_cycle]="2A",24,21))) AS Nb_Prof, 
        IIf([Nb_Prof]-Int([nb_prof])=0,Int([nb_prof]),Int([nb_prof])+1) AS Necessaire_Prof, 
        IIf([matiere].[code_mat]="0023" And [cd_cycle]="3A",([NB_Cl_Sc]-Int([NB_Cl_Sc]/3)*3)*6,[Heure_Mat]-Int([Nb_Prof])*IIf([matiere].[code_mat]="0026",18,IIf([cd_cycle]="2A",24,21))) AS TS_incomplet
    FROM R_NEFSTAT INNER JOIN (Z_etab INNER JOIN (Matiere INNER JOIN (T_Binya INNER JOIN T_NbHeure ON T_Binya.NEFSTAT = T_NbHeure.nefstat) ON Matiere.Code_Mat = T_NbHeure.Code_Mat) ON Z_etab.CD_ETAB = T_Binya.Code_Et) ON R_NEFSTAT.nefstat = T_Binya.NEFSTAT
    GROUP BY Z_etab.CD_COM, R_NEFSTAT.CD_CYCLE, Z_etab.CD_ETAB, Z_etab.NOM_ETABA, Matiere.Code_Mat, Matiere.Designation, Matiere.Obligatoire
    HAVING (((R_NEFSTAT.CD_CYCLE)="2A") AND ((Matiere.Obligatoire)=Yes)) OR (((R_NEFSTAT.CD_CYCLE)="3A") AND ((Matiere.Code_Mat)<>"0013" And (Matiere.Code_Mat)<>"0014" And (Matiere.Code_Mat)<>"0015"));
    ');
   }
}
