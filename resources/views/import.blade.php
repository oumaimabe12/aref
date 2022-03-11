@extends('auth.dashboard')

@section('title')
@endsection

@section('content')

    <div class="col-md-9 ajout">
      <div class="card">
        <div class="card-body">   
          <FORm  action="{{ route ('import') }}" method="post" enctype="multipart/form-data" >
              @csrf
    {{ csrf_field() }}


    <div class="row mb-3">
        <label for="inputDoti" class="col-sm-2 col-form-label">Doti</label>
        <div class="col-sm-8">
          <input name="file" type="file"  value="{{ old('Doti') }}" class="form-control" id="inputDoti">
          <span style="color: red">@error('Doti'){{$message}}@enderror</span>
  
        </div>
      </div>

    <div class="row mb-3">
      <label for="inputEt_Fon1" class="col-sm-2 col-form-label">Et_Fon1</label>
      <div class="col-sm-8">
        <input name="file" type="file" value="{{ old('Et_Fon1') }}" class="form-control" id="inputEt_Fon1">
        <span style="color: red">@error('Et_Fon1'){{$message}}@enderror</span>
      </div>
    </div>


    <div class="row mb-3">
      <label for="inputPr_Et1" class="col-sm-2 col-form-label">Pr_Et1</label>
      <div class="col-sm-8">
        <input name="file" type="file" value="{{ old('Pr_Et1') }}" class="form-control" id="inputPr_Et1">
        <span style="color: red">@error('Pr_Et1'){{$message}}@enderror</span>
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputNbHEt1" class="col-sm-2 col-form-label">NbHEt1</label>
        <div class="col-sm-8">
          <input name="file" type="file" value="{{ old('NbHEt1') }}" class="form-control" id="inputNbHEt1">
          <span style="color: red">@error('NbHEt1'){{$message}}@enderror</span>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputObj_Tak1" class="col-sm-2 col-form-label">Obj_Tak1</label>
        <div class="col-sm-8">
          <input name="file" type="file" value="{{ old('Obj_Tak1') }}" class="form-control" id="inputObj_Tak1">
          <span style="color: red">@error('Obj_Tak1'){{$message}}@enderror</span>
        </div>
      </div>

      <div class="col ">
        <ul class="list-inline">
            <li class="list-inline-item">
                <button class="btn btn-primary" type="submit">import</button>
            </li>
        </ul>
   </div>
    </FORm>     
   </div>
 </div>   
</div>

@endsection