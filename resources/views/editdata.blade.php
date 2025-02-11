@extends('partials.main')
@section('content')
<h1>Edit Data</h1>
<form action="{{route('siswa.edit', $siswa['id'])}}" method="post">
    @csrf
    @method('PUT')
    <div class="row col-5">
        <div class="mb-3">
        <label for="siswa" class="form-label">Nama Siswa</label>
        <input type="text" name="nama" class="form-control" id="namasiswa" placeholder="Ketik Nama Anda DI Sini"
        name="nama" value="{{$siswa['nama']}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" rows="3" value="{{$siswa['alamat']}}"></textarea>
      </div>
      <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
        <option selected>Pilih Jenis Kelaminmu</option>
        <option value="Laki-Laki" value="{{$siswa['jenis_kelamin'] == "Laki-Laki" ? 'selected' : ''}}">Laki-Laki</option>
        <option value="Perempuan" value="{{$siswa['jenis_kelamin'] == "Perempuan" ? 'selected' : ''}}">Perempuan</option>
      </select>
      <div class="mb-3">
        <label for="sekolah" class="form-label">Asal Sekolah</label>
        <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah Anda" >
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
