<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etatbesoin extends Model
{
    use HasFactory;
    protected $table = "etatbesoin";
    protected $fillable=['etab','mat','etat'];
}
