@extends('master-layout')

@section('content')
    <table class="table table-responsive">
      <th>
        <td>NAMA</td>
        <td>NIS</td>
        <td>TANGGAL LAHIR</td>
        <td>JENIS KELAMIN</td>
        <td>ALAMAT</td>
        <td>AKSI</td>
      </th>
      <tr>
        @foreach ($murid as $siswa)
            <tr>
              <td>{{$siswa->id}}</td>
              <td>{{$siswa->nama}}</td>
              <td>{{$siswa->nis}}</td>
              <td>{{$siswa->tanggal_lahir}}</td>
              <td>{{$siswa->jenis_kelamin}}</td>
              <td>{{$siswa->alamat}}</td>
              <td>
                <div class="btn-group" role="group">
                  <a href="/murid/{{$siswa->id}}/edit" class="btn btn-warning">Edit</a>
                  <form action="/murid/{{$siswa->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </form>
                </div>
              </td>
            </tr>
        @endforeach
      </tr>
    </table>
    <a href="/murid/create" class="btn btn-primary">Tambah Murid Baru</a>
@endsection