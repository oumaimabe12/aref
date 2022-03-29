<div class="table-responsive p-0">
    <table class="table align-items-center mb-0 myTable">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary ">CD_COM</th>
          <th class="text-uppercase text-secondary ">NOM_ETABA</th>
          <th class="text-uppercase text-secondary ">Designation</th>
          <th class="text-uppercase text-secondary ">NB_Cl_Sc</th>
          <th class="text-uppercase text-secondary ">Heure_Mat</th>
          <th class="text-uppercase text-secondary ">Nb_Prof</th>  
        </tr>
      </thead>
      
      <tbody>
        @foreach ($matb as $matb)
            <tr>
              <td>{{ $matb->CD_COM }}</td>
              <td>{{ $matb->NOM_ETABA }}</td>
              <td>{{ $matb->Designation }}</td>
              <td>{{ $matb->NB_Cl_Sc }}</td>
              <td>{{ $matb->Heure_Mat }}</td>
              <td>{{round(number_format($matb->Nb_Prof,1))}}</td>            
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>