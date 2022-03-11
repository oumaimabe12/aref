<!DOCTYPE html>
<html>
    <head>
        <title>Excel Export/Import</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
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
    </body>
</html>