@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <a class="btn btn-primary" href="{{ route ('takalif.create') }}">Ajouter</a>
        
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 myTable">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary ">N_Tak</th>
                <th class="text-uppercase text-secondary ">Date_Tak</th>
                <th class="text-uppercase text-secondary ">Typ_Tak</th>
                <th class="text-uppercase text-secondary ">Doti</th>
                <th class="text-uppercase text-secondary ">Mat_En</th>
                <th class="text-uppercase text-secondary ">Cycl_En1</th>
                <th class="text-uppercase text-secondary ">Et_Fon1</th>
                <th class="text-uppercase text-secondary ">Dat_Deb1</th>
                <th class="text-uppercase text-secondary ">Dat_Fin1</th>
                <th class="text-uppercase text-secondary ">Pr_Et1</th>
                <th class="text-uppercase text-secondary ">NbHEt1</th>
                <th class="text-uppercase text-secondary ">Obj_Tak1</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($takalif as $takalif)
                  <tr>
                    <td>{{ $takalif->N_Tak }}</td>
                    <td>{{ Carbon\Carbon::parse($takalif->Date_Tak)->format('Y-m-d') }}</td>
                    <td>{{ $takalif->Typ_Tak }}</td>
                    <td>{{ $takalif->Doti }}</td>
                    <td>{{ $takalif->Mat_En }}</td>
                    <td>{{ $takalif->Cycl_En1 }}</td>
                    <td>{{ $takalif->Et_Fon1 }}</td>
                    <td>{{ $takalif->Dat_Deb1 }}</td>
                    <td>{{ $takalif->Dat_Fin1 }}</td>
                    <td>{{ $takalif->Pr_Et1 }}</td>
                    <td>{{ $takalif->NbHEt1 }}</td>
                    <td>{{ $takalif->Obj_Tak1 }}</td>
                    <td><a href="{{ url('takalif/'.$takalif->Doti) }}" > 
                      <i class="far fa-light fa-eye"></i>
                    </a>
                    <a href="{{ route('takalif.edit', $takalif->Doti) }}" > 
                      <i class="far fa-edit"></i> </a>

                      <form action="{{ route ('takalif.destroy' , $takalif->Doti) }}" method="POST">
                        @csrf
                       @method('DELETE')
                         <button type="button" class="btn btn-danger">DELETE</button>
                     </form>

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