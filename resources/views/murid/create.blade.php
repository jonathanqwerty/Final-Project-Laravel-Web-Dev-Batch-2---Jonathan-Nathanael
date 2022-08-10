@extends('master-layout')

@section('content')
<h1>Menambah Siswa Baru</h1>
<form action="" method="POST">
  @csrf
  <div class="form-floating mb-3">
    <input type="text" name="nama" class="form-control" id="" placeholder="Nama Siswa">
    <label for="floatingInput">Nama Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input type="number" name="nis" class="form-control" id="" placeholder="NIS">
    <label for="floatingInput">NIS</label>
  </div>
  <div class="form-floating mb-3">
    <input type="date" name="tanggal_lahir" class="form-control" id="" placeholder="Tanggal Lahir">
    <label for="floatingInput">Tanggal Lahir</label>
  </div>
  <div>
    <select class="form-select form-select-lg mb-3">
      <option selected name="jenis_kelamin" placeholder="Jenis Kelamin">Jenis Kelamin</option>
      <option value="P">Laki-Laki</option>
      <option value="L">Perempuan</option>
    </select>
  </div>
  <div class="form-floating mb-3">
    <textarea type="text" name="alamat" class="form-control" id="" rows="10" placeholder="Alamat"></textarea>
    <label for="floatingInput">Alamat</label>
  </div>
  <div class="form-floating mb-3">
    <input class="btn btn-success" type="submit" value="Add">
  </div>
</form>
<a class="btn btn-primary" href="/daftarSiswa"><-Kembali Ke Daftar Siswa</a>
@endsection