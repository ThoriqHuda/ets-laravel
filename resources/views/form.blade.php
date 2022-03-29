@extends('layouts.main')

@section('container')
<form action="/proses" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="pasien">Pasien</label>
        <select class="form-control" id="pasien" name="pasien">
            @foreach ($pasiens as $pasien)
               <option value="{{ $pasien->nama }}">{{ $pasien->nama }}</option>
            @endforeach
         </select>
    </div>
    <div class="form-group">
        <label for="dokter">Dokter</label>
        <select class="form-control" id="dokter" name="dokter">
            @foreach ($dokter as $pasien)
               <option value="{{ $pasien->nama }}">{{ $pasien->nama }}</option>
            @endforeach
         </select>
    </div>
    <div class="form-group">
        <label for="usia">Condition</label>
        <input class="form-control" type="text" name="condition" value="{{ old('condition') }}">
    </div>
    <div class="form-group">
        <label for="usia">Temperature</label>
        <input class="form-control" type="text" name="temperature" value="{{ old('temperature') }}">
    </div>
    <div class="form-group">
        <label for="usia">Foto resep</label>
        <input type="file" name="image" class="form-control" >
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Proses">
    </div>
</form>

@endsection

