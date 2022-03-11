<?php

namespace App\Http\Controllers;
use App\Models\Binya;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BinyaController extends Controller
{
    //
    public function index()
    {
    $list = Binya::all();
    return view('binya.liste', [
        'binya' => $list
    ]);
}
}
