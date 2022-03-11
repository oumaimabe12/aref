@extends('auth.dashboard')

@section('title')
    Edit (Professeurs)
@endsection

@section('content')

    <div class="col-md-9 ajout">
      <div class="card">
        <div class="card-body">   
          <FORm  action="{{ route ('prof.update', ['id'=>$prof->id]) }}" method="post" >
              @csrf
              @method('PUT')
    {{ csrf_field() }}
    <div class="row mb-3">
      <label for="inputCycle_For" class="col-sm-2 col-form-label">Cycle_For</label>
      <div class="col-sm-8">
      <select name="Cycle_For" id="inputCycle_For" class="form-select">
        <option selected>Choose...</option>
        <option>2A</option>
        <option>3A</option>
      </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputCycle_Exe" class="col-sm-2 col-form-label">Cycle_Exe</label>
    <div class="col-sm-8">
    <select name="Cycle_Exe" id="inputCycle_Exe"  class="form-select">
      <option selected>Choose...</option>
      <option>2A</option>
      <option>3A</option>
    </select>
  </div>
</div>
<div class="row mb-3">
  <label for="inputCode_Et" class="col-sm-2 col-form-label">Code_Et</label>
  <div class="col-sm-8">
    <input name="Code_Et" type="number" value="{{ old('Code_Et' , $prof->Code_Et) }}" class="form-control" id="inputCode_Et">
  </div>
</div>
    <div class="row mb-3">
      <label for="inputDoti" class="col-sm-2 col-form-label">Doti</label>
      <div class="col-sm-8">
        <input name="Doti" type="number"  value="{{ old('Doti', $prof->Doti) }}" class="form-control" id="inputDoti">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
      <div class="col-sm-8">
        <input name="Nom" type="text" value="{{ old('Nom', $prof->Nom) }}" class="form-control" id="inputNom">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">NomFr</label>
      <div class="col-sm-8">
        <input name="NomFr" type="text" value="{{ old('NomFr', $prof->NomFr) }}"  class="form-control" id="inputNomFr">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">SexePr</label>
      <div class="col-sm-8">
      <select name="SexePr"  id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>Femme</option>
        <option>Homme</option>
      </select>
    </div>
  </div>
    <div class="row mb-3">
      <label for="inputDat_Nais" class="col-sm-2 col-form-label">Dat_Nais</label>
      <div class="col-sm-8">
        <input name="Dat_Nais" type="date" value="{{ old('Dat_Nais') }}" class="form-control" id="inputDat_Nais">
      </div>
    </div>
    
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">Matiere</label>
      <div class="col-sm-8">
      <select name="Matiere" id="inputState" class="form-select">
        <option selected>Choose...</option>
        @foreach ($mat as $item)
        <option value="{{ $item->Code_Mat}}">{{ $item->Designation}}</option>
        @endforeach
       
      </select>
    </div>
  </div>
    <div class="row mb-3">
      <label for="inputDat_Rec" class="col-sm-2 col-form-label">Dat_Rec</label>
      <div class="col-sm-8">
        <input name="Dat_Rec" type="date" value="{{ old('Dat_Rec') }}" class="form-control" id="inputDat_Rec">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_Aff_Del" class="col-sm-2 col-form-label">Dat_Aff_Del</label>
      <div class="col-sm-8">
        <input name="Dat_Aff_Del" type="date" value="{{ old('Dat_Aff_Del') }}"  class="form-control" id="inputDat_Aff_Del">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_aff_Et" class="col-sm-2 col-form-label">Dat_aff_Et</label>
      <div class="col-sm-8">
        <input name="Dat_aff_Et" type="date" value="{{ old('Dat_aff_Et') }}" class="form-control" id="inputDat_aff_Et">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputCIN" class="col-sm-2 col-form-label">CIN</label>
      <div class="col-sm-8">
        <input name="CIN" type="text" value="{{ old('CIN', $prof->CIN) }}" class="form-control" id="inputCIN">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputAvctif" class="col-sm-2 col-form-label">Avctif</label>
      <div class="col-sm-8">
        <input name="Avctif" type="text" value="{{ old('Avctif', $prof->Avctif) }}" class="form-control" id="inputAvctif">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObsAc" class="col-sm-2 col-form-label">ObsAc</label>
      <div class="col-sm-8">
        <input name="ObsAc" type="ObsAc" value="{{ old('ObsAc', $prof->ObsAc) }}" class="form-control" id="inputObsAc">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObs1" class="col-sm-2 col-form-label">Obs1</label>
      <div class="col-sm-8">
        <input name="Obs1" type="text" value="{{ old('Obs1', $prof->Obs1) }}"  class="form-control" id="inputObs1">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObs2" class="col-sm-2 col-form-label">Obs2</label>
      <div class="col-sm-8">
        <input name="Obs2" type="text" value="{{ old('Obs2', $prof->Obs2) }}"  class="form-control" id="inputObs2">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_Aff_Aca" class="col-sm-2 col-form-label">Dat_Aff_Aca</label>
      <div class="col-sm-8">
        <input name="Dat_Aff_Aca" type="date" value="{{ old('Dat_Aff_Aca') }}" class="form-control" id="inputDat_Aff_Aca">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputF19" class="col-sm-2 col-form-label">F19</label>
      <div class="col-sm-8">
        <input name="F19" type="F19" value="{{ old('F19', $prof->F19) }}" class="form-control" id="inputF19">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputF20" class="col-sm-2 col-form-label">F20</label>
      <div class="col-sm-8">
        <input name="F20" type="F20" value="{{ old('F20', $prof->F20) }}"  class="form-control" id="inputF20">
      </div>
    </div>

  @if ($errors->any()) 
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error}}</li>  
@endforeach
</ul>
@endif 

      <div class="col-auto">
        <button type="submit">Update</button>
      </div>
   </div>
    </FORm>     
   </div>
 </div>   
</div>

@endsection