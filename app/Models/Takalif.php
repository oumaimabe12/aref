<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takalif extends Model
{
    use HasFactory;

    protected $table = 't_takalif';
    protected $primaryKey = 'Doti';
    protected $fillable=['N_Tak','Date_Tak','Typ_Tak','Doti','Mat_En','Cycl_En1','Et_Fon1','Dat_Deb1','Dat_Fin1','Pr_Et1','NbHEt1','Obj_Tak1'];
}
