<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tambah Golongan</title>
</head>
<body> <br>
<form action="/golongan/store" method="POST" style="margin-left:50px !important;">
    @csrf
    
    <h4>Tambah Data Golongan</h4> <hr style="width: 25% !important;">
    <div class="mb-3">
    <label for="golongan" class="form-label">Kode Golongan</label>
    <input type="text" class="form-control" name="gol_kode" style="width: 25% !important;">
    </div>
    <div class="mb-3">
    <label for="golongan" class="form-label">Nama Golongan</label>
    <input type="text" class="form-control" name="gol_nama" style="width: 25% !important;">
    </div>
  
    <button type="submit" class="btn btn-primary">Save</button>
</form>

</body>
</html>
