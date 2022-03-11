@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h4>البنية التربوية </h4>
      </div>
      <div class="card-header pb-0">
        <a class="btn btn-primary" href="{{ route ('index') }}">importer</a>
        
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 myTable">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary ">Code_Et</th>
                <th class="text-uppercase text-secondary ">NEFSTAT</th>
                <th class="text-uppercase text-secondary ">Nb_Clas</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($binya as $binya)
                  <tr>
                    <td>{{ $binya->Code_Et }}</td>
                    <td>{{ $binya->NEFSTAT }}</td>
                    <td>{{ $binya->Nb_Clas }}</td>
                
                  </tr>
              @endforeach
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
@endsection