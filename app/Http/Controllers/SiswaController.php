<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class SiswaController extends Controller
{
    public function Siswa()
    {
      $murid = Murid::all();
      return view('daftarSiswa',compact('murid'));
    }

    public function create()
    {
      return view('murid.create');
    }

    public function saveData(Request $request)
    {
      Murid::create($request->except(['_token','submit']));
      return redirect('daftarSiswa');
    }

    public function edit($id)
    {
      $murid = Murid::find($id);
      return view('murid.edit', compact('murid'));
    }

    public function update($id, Request $request)
    {
      $murid = Murid::find($id);
      $murid->update($request->except(['_token','submit']));
      return redirect('daftarSiswa');
    }

    public function destroy($id)
    {
      $murid = Murid::find($id);
      $murid->delete();
      return redirect('daftarSiswa');
    }
}
