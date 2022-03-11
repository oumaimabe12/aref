@extends('auth.dashboard')

@section('title')
    Professeurs
@endsection

@section('content')

<div class="container">
<div class="row  justify-content-center">
    <div class="col-md-10">
      <div class="card-header">
       
      <ul class="list-group ">
        <li class="list-group-item">CD_ETAB : {{ $etab->CD_ETAB }}</li>
        <li class="list-group-item">CD_GIPE : {{ $etab->CD_GIPE }}</li>
        <li class="list-group-item">NOM_ETABL : {{ $etab->NOM_ETABL }}</li>
        <li class="list-group-item">NOM_ETABA : {{ $etab->NOM_ETABA }}</li>
        <li class="list-group-item">CD_COM : {{ $etab->CD_COM }}</li>
        <li class="list-group-item">CD_NETAB : {{ $etab->CD_NETAB }}</li>
        <li class="list-group-item">ensPrimG : {{ $etab->ensPrimG }}</li>
      </ul>

    </div>
    </div>
  </div>
</div>
@endsection