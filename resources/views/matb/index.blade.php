@extends('auth.dashboard')

@section('title')
    
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h4> Besoins </h4>
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <form action="" method="post" name="fsrc" id="fsrc">
          @csrf
          <select name="matiere" id="matiere">
            @foreach ($matb as $item)
                <option value="{{$item->Code_Mat}}">{{$item->Designation}}</option>
            @endforeach
          </select>
        </form>

        <div class="col-auto">
          <button type="button" class="btn btn-primary" id="bsub">Chercher</button>
        </div>
      </div>
      <hr>
      <div class="card-body" id="rst"></div>
    </div>
  </div>
@endsection

@section('script')
$( "#bsub" ).click(function() {
  //alert( "yaki a omy." );
  var formData =  $('#fsrc').serialize();
  $.ajax({
    type: "POST",
    url: "{{route('srchmt')}}",
    data: formData,
  }).done(function (data) {
    //alert(data);
    $('#rst').html(data);
  });

  event.preventDefault();
});
@endsection