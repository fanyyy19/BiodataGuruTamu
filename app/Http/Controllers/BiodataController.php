<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{


    public function menampilkanBiodata () {

    $Nama = Biodata::$nama;
    $Kelas = Biodata::$kelas;
    $Sekolah = Biodata::$sekolah;
    $Alamat = Biodata::$alamat;
    $Hobi = Biodata::$hobi;

    return view('biodata', compact('Nama', 'Kelas', 'Sekolah', 'Alamat', 'Hobi' ));  
 }
}
