@extends('auth.dashboard')

@section('title')
@endsection

@section('content')

    <div class="col-md-9 ajout">
      <div class="card">
        <div class="card-body">   
            <FORm  action="{{ route ('takalif.update' , $takalif->Doti) }}" method="post" >
                @csrf
              @method('PUT')
    {{ csrf_field() }}

<div class="row mb-3">
  <label for="inputN_Tak" class="col-sm-2 col-form-label">N_Tak</label>
  <div class="col-sm-8">
    <input name="N_Tak" type="number" value="{{ old('N_Tak' , $takalif->N_Tak) }}" class="form-control" id="inputN_Tak">
    <span style="color: red">@error('N_Tak'){{$message}}@enderror</span>
  </div>
</div>

    <div class="row mb-3">
      <label for="inputDate_Tak" class="col-sm-2 col-form-label">Date_Tak</label>
      <div class="col-sm-8">
        <input name="Date_Tak" type="date" value="{{ old('Date_Tak',$takalif->Date_Tak) }}" class="form-control" id="inputDate_Tak">
        <span style="color: red">@error('Date_Tak'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputTyp_Tak" class="col-sm-2 col-form-label">Typ_Tak</label>
      <div class="col-sm-8">
        <input name="Typ_Tak"  value="{{ old('Typ_Tak',$takalif->Typ_Tak) }}" type="text"   class="form-control" id="inputTyp_Tak">
        <span style="color: red">@error('Typ_Tak'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputDoti" class="col-sm-2 col-form-label">Doti</label>
        <div class="col-sm-8">
          <input name="Doti" type="text"  value="{{ old('Doti',$takalif->Doti) }}" class="form-control" id="inputDoti">
          <span style="color: red">@error('Doti'){{$message}}@enderror</span>
  
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputMat_En" class="col-sm-2 col-form-label">Mat_En</label>
        <div class="col-sm-8">
        <select name="Mat_En" required ="true" value="{{ old('Mat_En',$takalif->Mat_En) }}" id="inputState" class="form-select" >
          <option value="0" selected>Choose...</option>
          @foreach ($mat as $item)
          <option value="{{ $item->Code_Mat}}">{{ $item->Designation }}</option>
          @endforeach
        </select>
        <span style="color: red">@error('Mat_En'){{$message}}@enderror</span>
      </div>    
    </div>
    <div class="row mb-3">
        <label for="inputCycl_En1" class="col-sm-2 col-form-label">Cycl_En1</label>
        <div class="col-sm-8">
        <select name="Cycl_En1" required ="true"  id="inputCycl_En1" class="form-select">
          <option value="0" selected>Choose...</option>
          <option>2A</option>
          <option>3A</option>
        </select>
        <span style="color: red">@error('Cycl_En1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEt_Fon1" class="col-sm-2 col-form-label">Et_Fon1</label>
      <div class="col-sm-8">
        <input name="Et_Fon1" type="text" value="{{ old('Et_Fon1' ,$takalif->Mat_En) }}" class="form-control" id="inputEt_Fon1">
        <span style="color: red">@error('Et_Fon1'){{$message}}@enderror</span>
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputDat_Deb1" class="col-sm-2 col-form-label">Dat_Deb1</label>
      <div class="col-sm-8">
        <input name="Dat_Deb1" type="date" value="{{ old('Dat_Deb1') }}" class="form-control" id="inputDat_Deb1">
        <span style="color: red">@error('Dat_Deb1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputDat_Fin1" class="col-sm-2 col-form-label">Dat_Fin1</label>
      <div class="col-sm-8">
        <input name="Dat_Fin1" type="date" value="{{ old('Dat_Fin1') }}"  class="form-control" id="inputDat_Fin1">
        <span style="color: red">@error('Dat_Fin1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPr_Et1" class="col-sm-2 col-form-label">Pr_Et1</label>
      <div class="col-sm-8">
        <input name="Pr_Et1" type="text" value="{{ old('Pr_Et1' ,$takalif->Pr_Et1) }}" class="form-control" id="inputPr_Et1">
        <span style="color: red">@error('Pr_Et1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputNbHEt1" class="col-sm-2 col-form-label">NbHEt1</label>
        <div class="col-sm-8">
          <input name="NbHEt1" type="number" value="{{ old('NbHEt1' ,$takalif->NbHEt1) }}" class="form-control" id="inputNbHEt1">
          <span style="color: red">@error('NbHEt1'){{$message}}@enderror</span>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputObj_Tak1" class="col-sm-2 col-form-label">Obj_Tak1</label>
        <div class="col-sm-8">
          <input name="Obj_Tak1" type="text" value="{{ old('Obj_Tak1' ,$takalif->Obj_Tak1) }}" class="form-control" id="inputObj_Tak1">
          <span style="color: red">@error('Obj_Tak1'){{$message}}@enderror</span>
        </div>
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-outline-primary">Update</button>
      </div>
    </FORm>     
   </div>
 </div>   
</div>

@endsection