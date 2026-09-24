<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    { 
   $nama = "Ghoufur";
  $kelas = "XII RPL";
    $hobi = "Membaca buku, Workout, Begadang";


        return view('profil', [
            'nama' => $nama,
            'kelas' => $kelas,
            'hobi' => $hobi,
        ]);
    }

    public function sapa($nama)
    {
        return view('sapa', ['nama' => $nama]);
    }

    public function mapel()
    {
        $daftarMapel = ['Pemrograman Web', 'Basis Data', 'PBO', 'Bahasa Indonesia', 'Matematika'];
        return view('mapel', ['mapel' => $daftarMapel]);
    }
}