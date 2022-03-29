@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h4>لائحة المؤسسات</h4>
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 myTable">
            <thead>
              <tr>
                <th class="text-secondary opacity-7"></th>
                <th class="text-uppercase text-secondary ">CD_ETAB</th>
                <th class="text-uppercase text-secondary ">CD_GIPE</th>
                <th class="text-uppercase text-secondary ">NOM_ETABL</th>
                <th class="text-uppercase text-secondary ">NOM_ETABA</th>
                <th class="text-uppercase text-secondary ">CD_COM</th>
                <th class="text-uppercase text-secondary ">CD_NETAB</th>
                <th class="text-uppercase text-secondary ">ensPrimG</th>
                <th>  </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($z_etab as $etab)
                  <tr>
                    <td>{{ $etab->id }}</td>
                    <td>{{ $etab->CD_ETAB }}</td>
                    <td>{{ $etab->CD_GIPE }}</td>
                    <td>{{ $etab->NOM_ETABL }}</td>
                    <td>{{ $etab->NOM_ETABA }}</td>
                    <td>{{ $etab->CD_COM }}</td>
                    <td>{{ $etab->CD_NETAB }}</td>
                    <td>{{ $etab->ensPrimG }}</td>
                    <td>
                      <a href="{{ route('etab.show', ['id'=>$etab->id]) }}"> 
                        <button class="btn btn-link trash-btn" type="submit"><i class="far fa-light fa-eye"></i></button>
                      </a>
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