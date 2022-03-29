<div class="table-responsive p-0">
    <table class="table align-items-center mb-0 myTable">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary ">CD_COM</th>
          <th class="text-uppercase text-secondary ">NOM_ETABA</th>
          <th class="text-uppercase text-secondary ">Designation</th>
          <th class="text-uppercase text-secondary ">NB_Cl_Sc</th>
          <th class="text-uppercase text-secondary ">Heure_Mat</th>
          <th class="text-uppercase text-secondary ">Necessaire_Prof</th>  
          <th class="text-uppercase text-secondary ">Nb_Prof</th>  
          <th class="text-uppercase text-secondary ">Ecart</th>  
        </tr>
      </thead>
      
      <tbody>
        @foreach ($besoin as $besoin)
            <tr>
              <td>{{ $besoin->CD_COM }}</td>
              <td>{{ $besoin->NOM_ETABA }}</td>
              <td>{{ $besoin->Designation }}</td>
              <td>{{ $besoin->NB_Cl_Sc }}</td>
              <td>{{ $besoin->Heure_Mat }}</td>
              <td>{{round(number_format($besoin->Necessaire_Prof,1))}}</td>            
              <td>{{round(number_format($besoin->Nb_Prof,1))}}    
                        
              <td>
                @php
                  $r = round(number_format($besoin->Necessaire_Prof-$besoin->Nb_Prof, 2));
                  //$r = round(number_format($besoin->Necessaire_Prof-$besoin->Nb_Prof, 2));
                  //$r = $besoin->Necessaire_Prof-$besoin->Nb_Prof;
                @endphp
              @if (round(number_format($besoin->Necessaire_Prof, 2))>round(number_format($besoin->Nb_Prof, 2)))
              <span  class="badge bg-danger "> {{$r}} </span>
              @elseif (round(number_format($besoin->Necessaire_Prof, 2))==round(number_format($besoin->Nb_Prof, 2)))
                <span  class="badge bg-secondary "> {{$r}} </span>
              @elseif (round(number_format($besoin->Necessaire_Prof, 2))<round(number_format($besoin->Nb_Prof, 2)))
                <span  class="badge bg-success "> {{$r}} </span>
              @else
              <span  class="badge bg-secondary "> {{$r}} </span>
              @endif
            </td>

            </tr>
        @endforeach
      </tbody>
    </table>


  </div>