<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $primaryKey = 'id';


    protected $fillable=['id','cycle_for','cycle_exe','cycle_et','doti','nom','nomfr','sexepr','dat_nais','matiere','dat_rec','dat_aff_del','dat_aff_et','cin','avctif','obsac','obs1','obs2','dat_aff_aca','f19','f20'];
 

}
