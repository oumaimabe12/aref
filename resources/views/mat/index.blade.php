@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h4>المواد المدرسية </h4>
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 myTable">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary ">Code_Mat</th>
                <th class="text-uppercase text-secondary ">Lib_Fr</th>
                <th class="text-uppercase text-secondary ">Designation</th>
                <th class="text-uppercase text-secondary ">Obligatoire</th>
                <th class="text-uppercase text-secondary ">OrdAf</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($matiere as $mat)
                  <tr>
                    <td>{{ $mat->Code_Mat }}</td>
                    <td>{{ $mat->Lib_Fr }}</td>
                    <td>{{ $mat->Designation }}</td>
                    <td>{{ $mat->Obligatoire }}</td>
                    <td>{{ $mat->OrdAf }}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
@endsection