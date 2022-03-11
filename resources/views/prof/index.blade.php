@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h4>لائحة الاساتذة</h4>
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 myTable">
            <thead>
              <tr>
                <th class="text-secondary opacity-7"></th>
                <th class="text-uppercase text-secondary ">Cycle_For</th>
                <th class="text-uppercase text-secondary ">Cycle_Exe</th>
                <th class="text-uppercase text-secondary ">Code_Et</th>
                <th class="text-uppercase text-secondary ">Doti</th>
                <th class="text-uppercase text-secondary ">الاسم</th>
                <th class="text-uppercase text-secondary ">NomFr</th>
                <th class="text-uppercase text-secondary ">الجنس</th>
                <th>edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($profs as $prof)
                  <tr>
                    <td>{{ $prof->id }}</td>
                    <td>{{ $prof->Cycle_For }}</td>
                    <td>{{ $prof->Cycle_Exe }}</td>
                    <td>{{ $prof->Code_Et }}</td>
                    <td>{{ $prof->Doti }}</td>
                    <td>{{ $prof->Nom }}</td>
                    <td>{{ $prof->NomFr }}</td>
                    <td>{{ $prof->SexePr }}</td>
                    <td>
                      <a href="{{ route('prof.show', ['id'=>$prof->id]) }}" > 
                        <i class="far fa-light fa-eye"></i>
                      </a>
                      <a href="{{ route('edit', ['id'=>$prof->id]) }}" > 
                       <i class="far fa-edit"></i> </a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection