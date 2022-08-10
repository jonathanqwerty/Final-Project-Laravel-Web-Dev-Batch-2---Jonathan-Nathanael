@extends('master-layout')

@section('content')
  <h1>Edit Siswa Ini</h1>
  <form action="/murid/{{$murid->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-floating mb-3">
      <input type="text" name="nama" class="form-control" id="" placeholder="Nama Siswa" value="{{$murid->nama}}">
      <label for="floatingInput">Nama Siswa</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" name="nis" class="form-control" id="" placeholder="NIS" value="{{$murid->nis}}">
      <label for="floatingInput">NIS</label>
    </div>
    <div class="form-floating mb-3">
      <input type="date" name="tanggal_lahir" class="form-control" id="" placeholder="Tanggal Lahir" value="{{$murid->tanggal_lahir}}">
      <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <div>
      <select class="form-select form-select-lg mb-3" name="jenis_kelamin">
        <option value="">Jenis Kelamin</option>
        <option value="L" @if($murid->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($murid->jenis_kelamin == "P") selected @endif>Perempuan</option>
      </select>
    </div>
    <div class="form-floating mb-3">
      <textarea type="text" name="alamat" class="form-control" id="" rows="10" placeholder="Alamat">{{$murid->alamat}}</textarea>
      <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating mb-3">
      <input class="btn btn-warning" type="submit" value="Edit">
    </div>
  </form>
<a href="/daftarSiswa"><-Kembali Ke Daftar Siswa</a>
@endsection