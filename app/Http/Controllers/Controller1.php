<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }

    public function tampilkan(Request $request)
    {
        $model = new Mahasiswa();
        $model::insert([
            'nim'=>@$request->nim,
            'nama'=>@$request->nama,
            'alamat'=>@$request->alamat,
            'created_at'=>@date("Y-m-d H-i-s")
        ]);

        $dataAll = $model->all();
        return view('tampil2', ['data' => $request->all(), 'dataAll'=>@$dataAll ]);
    }


    // prak 4
    public function logout()
    {
        return view('logout');
    }
}