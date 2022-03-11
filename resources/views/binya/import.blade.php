@extends('auth.dashboard')

@section('title')
    import
@endsection

@section('content')

    <div class="col-md-9 ajout">
      <div class="card">
        <div class="card-body">   
            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="excel" class="form-label"></label>
                    <input type="file" name="excel" class="form-control">
                </div>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
   </div>
 </div>   
</div>

@endsection