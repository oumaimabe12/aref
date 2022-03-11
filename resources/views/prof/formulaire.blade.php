@extends('auth.dashboard')

@section('title')
    Add (Professeurs)
@endsection

@section('content')

    <div class="col-md-9 ajout">
      <div class="card">
        <div class="card-body">   
          <FORm  action="{{ route('prof.store')}}" method="post" >
              @csrf
    {{ csrf_field() }}
    <div class="row mb-3">
      <label for="inputCycle_For" class="col-sm-2 col-form-label">Cycle_For</label>
      <div class="col-sm-8">
      <select name="Cycle_For" required ="true"  id="inputCycle_For" class="form-select">
        <option value="0" selected>Choose...</option>
        <option>2A</option>
        <option>3A</option>
      </select>
      <span style="color: red">@error('Cycle_For'){{$message}}@enderror</span>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputCycle_Exe" class="col-sm-2 col-form-label">Cycle_Exe</label>
    <div class="col-sm-8">
    <select name="Cycle_Exe" required ="true"  id="inputCycle_Exe"  class="form-select">
      <option value="0" selected>Choose...</option>
      <option>2A</option>
      <option>3A</option>
    </select>
    <span style="color: red">@error('Cycle_Exe'){{$message}}@enderror</span>
  </div>
</div>
<div class="row mb-3">
  <label for="inputCode_Et" class="col-sm-2 col-form-label">Code_Et</label>
  <div class="col-sm-8">
    <input name="Code_Et" type="number" value="{{ old('Code_Et') }}" class="form-control" id="inputCode_Et">
    <span style="color: red">@error('Code_Et'){{$message}}@enderror</span>
  </div>
</div>
    <div class="row mb-3">
      <label for="inputDoti" class="col-sm-2 col-form-label">Doti</label>
      <div class="col-sm-8">
        <input name="Doti" type="number"  value="{{ old('Doti') }}" class="form-control" id="inputDoti">
        <span style="color: red">@error('Doti'){{$message}}@enderror</span>

      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNom" class="col-sm-2 col-form-label">الاسم</label>
      <div class="col-sm-8">
        <input name="Nom" type="text" value="{{ old('Nom') }}" class="form-control" id="inputNom">
        <span style="color: red">@error('Nom'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">NomFr</label>
      <div class="col-sm-8">
        <input name="NomFr"  value="{{ old('NomFr') }}" type="text"   class="form-control" id="inputNomFr">
        <span style="color: red">@error('NomFr'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">SexePr</label>
      <div class="col-sm-8">
      <select name="SexePr" required ="true" value="{{ old('SexePr') }}" id="inputState" class="form-select">
        <option value="0" selected>Choose...</option>
        <option>Femme</option>
        <option>Homme</option>
      </select>
      <span style="color: red">@error('SexePr'){{$message}}@enderror</span>
    </div>
  </div>
    <div class="row mb-3">
      <label for="inputDat_Nais" class="col-sm-2 col-form-label">Dat_Nais</label>
      <div class="col-sm-8">
        <input name="Dat_Nais" type="date" value="{{ old('Dat_Nais') }}" class="form-control" id="inputDat_Nais">
        <span style="color: red">@error('Dat_Nais'){{$message}}@enderror</span>
      </div>
    </div>
    
    <div class="row mb-3">
      <label for="inputNomFr" class="col-sm-2 col-form-label">Matiere</label>
      <div class="col-sm-8">
      <select name="Matiere" required ="true" value="{{ old('Matiere') }}" id="inputState" class="form-select" >
        <option value="0" selected>Choose...</option>
        @foreach ($mat as $item)
        <option value="{{ $item->Code_Mat}}">{{ $item->Designation}}</option>
        @endforeach
      </select>
      <span style="color: red">@error('Matiere'){{$message}}@enderror</span>
    </div>    
  </div>
    <div class="row mb-3">
      <label for="inputDat_Rec" class="col-sm-2 col-form-label">Dat_Rec</label>
      <div class="col-sm-8">
        <input name="Dat_Rec" type="date" value="{{ old('Dat_Rec') }}" class="form-control" id="inputDat_Rec">
        <span style="color: red">@error('Dat_Rec'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_Aff_Del" class="col-sm-2 col-form-label">Dat_Aff_Del</label>
      <div class="col-sm-8">
        <input name="Dat_Aff_Del" type="date" value="{{ old('Dat_Aff_Del') }}"  class="form-control" id="inputDat_Aff_Del">
        <span style="color: red">@error('Dat_Aff_Del'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_aff_Et" class="col-sm-2 col-form-label">Dat_aff_Et</label>
      <div class="col-sm-8">
        <input name="Dat_aff_Et" type="date" value="{{ old('Dat_aff_Et') }}" class="form-control" id="inputDat_aff_Et">
        <span style="color: red">@error('Dat_aff_Et'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputCIN" class="col-sm-2 col-form-label">CIN</label>
      <div class="col-sm-8">
        <input name="CIN" type="text" value="{{ old('CIN') }}" class="form-control" id="inputCIN">
        <span style="color: red">@error('CIN'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputAvctif" class="col-sm-2 col-form-label">Avctif</label>
      <div class="col-sm-8">
        <input name="Avctif" type="text" value="{{ old('Avctif') }}" class="form-control" id="inputAvctif">
        <span style="color: red">@error('Avctif'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObsAc" class="col-sm-2 col-form-label">ObsAc</label>
      <div class="col-sm-8">
        <input name="ObsAc" type="ObsAc" value="{{ old('ObsAc') }}" class="form-control" id="inputObsAc">
        <span style="color: red">@error('ObsAc'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObs1" class="col-sm-2 col-form-label">Obs1</label>
      <div class="col-sm-8">
        <input name="Obs1" type="text" value="{{ old('Obs1') }}"  class="form-control" id="inputObs1">
        <span style="color: red">@error('Obs1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputObs2" class="col-sm-2 col-form-label">Obs2</label>
      <div class="col-sm-8">
        <input name="Obs2" type="text" value="{{ old('Obs2') }}"  class="form-control" id="inputObs2">
        <span style="color: red">@error('Obs2'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_Aff_Aca" class="col-sm-2 col-form-label">Dat_Aff_Aca</label>
      <div class="col-sm-8">
        <input name="Dat_Aff_Aca" type="date" value="{{ old('Dat_Aff_Aca') }}" class="form-control" id="inputDat_Aff_Aca">
        <span style="color: red">@error('Dat_Aff_Aca'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputF19" class="col-sm-2 col-form-label">F19</label>
      <div class="col-sm-8">
        <input name="F19" type="F19" value="{{ old('F19') }}" class="form-control" id="inputF19">
        <span style="color: red">@error('F19'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputF20" class="col-sm-2 col-form-label">F20</label>
      <div class="col-sm-8">
        <input name="F20" type="F20" value="{{ old('F20') }}"  class="form-control" id="inputF20">
        <span style="color: red">@error('F20'){{$message}}@enderror</span>
      </div>
    </div>



      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
    </FORm>     
   </div>
 </div>   
</div>

@endsection