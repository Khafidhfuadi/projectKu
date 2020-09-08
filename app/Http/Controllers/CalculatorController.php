<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator/index');
    }

    public function operasi(Request $request) {
        $hitung = $request -> input('hitung');
        $angka1 = $request -> input('angka1');
        $angka2 = $request -> input('angka2');
        $hasil = 0;

        switch ($hitung) {
            case "tambah":
              $hasil = $angka1 + $angka2;
              break;
            case "kurang":
              $hasil = $angka1 - $angka2;
              break;
            case "kali":
              $hasil = $angka1 * $angka2;
              break;
            case "bagi":
            $hasil = $angka1 / $angka2;
            break;
            default:
              $hasil = 69;
          }
        return redirect('calculator')->with('info','hasilnya adalah: ' . $hasil);
    }
}
