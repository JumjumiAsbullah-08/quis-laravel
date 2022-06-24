<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit Pelanggan</title>
    </head>
<body> <br>
<form action="/pelanggan/{{$pelanggan->id}}" method="POST" style="margin-left:50px !important;">
    @method('put')
    @csrf
    <h4>EditData Pelanggan</h4> <hr style="width: 25% !important;">
    
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Id Pelanggan</label>
    <input type="text" class="form-control" name="pel_id_gol" style="width: 25% !important;" value="{{ $pelanggan->pel_id_gol }}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Nomor Pelanggan</label>
    <input type="text" name="pel_no" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_no }}"> 
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" name="pel_nama" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_nama }}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">No. Handphone</label>
    <input type="text" name="pel_hp" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_hp}}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">NIK</label> 
    <input type="text" name="pel_ktp" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_ktp }}"> 
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Nomor Seri</label>
    <input type="text" name="pel_ser" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_ser }}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Nomor Meteran</label>
    <input type="text" name="pel_meteran" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_meteran }}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Id User</label>
    <input type="text" name="pel_id_user" class="form-control" style="width: 25% !important;" value="{{ $pelanggan->pel_id_user }}">
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Status</label>
    <select name="pel_aktif" class="form-control" class="form-control" style="width: 25% !important;">
        <option value="">--Pilih Status--</option>
        <option value="Y" @if($pelanggan->pel_aktif == "Y") selected @endif>Aktif</option>
        <option value="N" @if($pelanggan->pel_aktif == "N") selected @endif>Non Aktif</option>
    </select>
    </div>
    <div class="mb-3">
    <label for="pelanggan" class="form-label">Alamat</label>
    <textarea name="pel_alamat" rows="3" class="form-control" class="form-control" style="width: 25% !important;">{{ $pelanggan->pel_alamat }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
