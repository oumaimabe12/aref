@extends('auth.dashboard')

@section('title')
    Professeurs
@endsection

@section('content')

<div class="container">
<div class="row  justify-content-center">
    <div class="col-md-10">
      <div class="card-header">
        <div class="col-md-12 " style="text-align:center"> <h4 class="mb-3" > Professeur : {{ $prof->NomFr }}</h4></div>
       
      <ul class="list-group ">
        <li class="list-group-item">Cycle_For : {{ $prof->Cycle_For }}</li>
        <li class="list-group-item">Cycle_Exe : {{ $prof->Cycle_Exe }}</li>
        <li class="list-group-item">Code_Et : {{ $prof->Code_Et }}</li>
        <li class="list-group-item">Doti : {{ $prof->Doti }}</li>
        <li class="list-group-item">Nom : {{ $prof->Nom }}</li>
        <li class="list-group-item">NomFr : {{ $prof->NomFr }}</li>
        <li class="list-group-item">SexePr : {{ $prof->SexePr }}</li>
        <li class="list-group-item">Dat_Nais : {{ $prof->Dat_Nais }}</li>
        <li class="list-group-item">Matiere : {{ $prof->Matiere }}</li>
        <li class="list-group-item">Dat_Rec : {{ $prof->Dat_Rec }}</li>
        <li class="list-group-item">Dat_Aff_Del : {{ $prof->Dat_Aff_Del }}</li>
        <li class="list-group-item">Dat_aff_Et : {{ $prof->Dat_aff_Et }}</li>
        <li class="list-group-item">CIN : {{ $prof->CIN }}</li>
        <li class="list-group-item">Avctif : {{ $prof->Avctif }}</li>
        <li class="list-group-item">ObsAc : {{ $prof->ObsAc }}</li>
        <li class="list-group-item">Obs1 : {{ $prof->Obs1 }}</li>
        <li class="list-group-item">Obs2 : {{ $prof->Ob2 }}</li>
        <li class="list-group-item">Dat_Aff_Aca : {{ $prof->Dat_Aff_Aca }}</li>
        <li class="list-group-item">F19 : {{ $prof->F19 }}</li>
        <li class="list-group-item">F20 : {{ $prof->F20 }}</li>
      </ul>

    </div>
    </div>
  </div>
</div>
@endsection