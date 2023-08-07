<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File uploading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    {{-- The attribute enctype="multipart/form-data" is used in HTML forms when you want to upload files, such as images, videos, documents, etc., from the client's computer to the server.  --}}
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container">
        <div class="form-group mt-3">
            <label for="">File</label>
            <br/>
            <input type="file" name="image">
        </div>
        <button class="btn btn-primary mt-2">Upload</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>