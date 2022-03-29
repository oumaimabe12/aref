<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matb extends Model
{
    use HasFactory;

    protected $table="r_besoin_et";
    protected $fillable=['CD_COM','NOM_ETABA','Designation','NB_Cl_Sc','Heure_Mat','Nb_Prof'];
}
