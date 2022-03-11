<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binya extends Model
{
    use HasFactory;
    protected$table="t_binya";
    protected $fillable=['Code_Et','NEFSTAT','Nb_Clas'];

}
