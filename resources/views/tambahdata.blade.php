@extends('partials.main')
@section('content')
    <h1>Form Tambah Data</h1>
    <form action="{{ route('tambahdata.process') }}" method="post">
        @csrf
        <div class="row col-5">
            <div class="mb-3">
                <label for="siswa" class="form-label">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" id="namasiswa" placeholder="Ketik Nama Anda DI Sini">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                    <option selected value="">Pilih Jenis Kelaminmu Wajib</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <span class="text-danger">{{ $message }}</span>

            @enderror
            </div>
            <div class="mb-3">
                <label for="sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Asal Sekolah Anda">
                @error('sekolah')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
