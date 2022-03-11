<?php

namespace App\Imports;

use App\Models\Binya;
use App\Models\Mat;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
  
class UsersImport implements ToModel
{
    /**
    * @param array $data
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $data)
    {
        return new Binya([
            'Code_Et'     => $data[2],
            'NEFSTAT'    => $data[3], 
            'Nb_Clas' => $data[5],
        ]);
    }
}