@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')

<div class="container">
<div class="row  justify-content-center">
    <div class="col-md-10">
      <div class="card-header">
        <div class="col-md-12 " style="text-align:center"> <h4 class="mb-3" > </h4></div>
       
      <ul class="list-group ">
        <li class="list-group-item">N_Tak : {{ $takalif->N_Tak }}</li>
        <li class="list-group-item">Date_Tak : {{ $takalif->Date_Tak }}</li>
        <li class="list-group-item">Typ_Tak : {{ $takalif->Typ_Tak }}</li>
        <li class="list-group-item">Doti : {{ $takalif->Doti }}</li>
        <li class="list-group-item">Mat_En : {{ $takalif->Mat_En }}</li>
        <li class="list-group-item">Cycl_En1 : {{ $takalif->Cycl_En1 }}</li>
        <li class="list-group-item">Et_Fon1 : {{ $takalif->Et_Fon1 }}</li>
        <li class="list-group-item">Dat_Deb1 : {{ $takalif->Dat_Deb1 }}</li>
        <li class="list-group-item">Dat_Fin1 : {{ $takalif->Dat_Fin1 }}</li>
        <li class="list-group-item">Pr_Et1 : {{ $takalif->Pr_Et1 }}</li>
        <li class="list-group-item">NbHEt1 : {{ $takalif->NbHEt1 }}</li>
        <li class="list-group-item">Obj_Tak1 : {{ $takalif->Obj_Tak1 }}</li>
      </ul>
    </div>
    </div>
  </div>
</div>
@endsection