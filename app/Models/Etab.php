<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etab extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable=['id','CD_ETAB','CD_GIPE','NOM_ETABL','NOM_ETABA','CD_COM','CD_NETAB','ensPrimG'];

}
