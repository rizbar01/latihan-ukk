@extends('partials.main')

@section('content')
    <h1>Data Siswa</h1>
    <a href="{{route('tambahdata')}}" class="btn btn-success">Tambah Data</a>

    <table class="table table-hover mt-5">

    <tr class="table-dark">
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>Asal Sekolah</td>
        <td>Menu</td>
    </tr>
.
    @foreach ($siswa as $sw)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $sw['nama'] }}</td>
        <td>{{ $sw['alamat'] }}</td>
        <td>{{ $sw['jenis_kelamin'] }}</td>
        <td>{{ $sw['sekolah'] }}</td>
        <td>
            <form action="{{ Route('siswa.delete', $sw['id']) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Hapus</button>
                <a href="{{route('siswa.edit', $sw['id'])}}" class="btn btn-warning" >Edit</a>
            </form>

        </td>
    </tr>

    @endforeach
</table>
@endsection
