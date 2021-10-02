<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Validator;
use App\Models\Utility;
use App\Models\Pelanggan;

class UtilityController extends Controller
{
    //
    public function index()
    {
        # code...
        $kode  = "G001";
        $data = [
            'title'      => 'Utility',
            'utility'    => Utility::where('kode_dc', $kode)->get(),
            'pelanggan'  => Pelanggan::where('kode_dc', $kode)->get(),
        ];
        return view('utility', $data);
    }

    public function store(Request $req)
    {
        $utility        = $req->utility;
        $deskripsi      = $req->deskripsi;
        $pelanggan      = $req->pelanggan;
        $nik_pemakai    = $req->nik_pemakai;
        $nama_pemakai   = $req->nama_pemakai;
        $tipe_rusak     = $req->tipe_rusak;
        $sla            = $req->sla;
        $penjelasan     = $req->penjelasan;

        $validator = Validator::make($req->all(), [
            'utility'          => 'required',
            'deskripsi'        => 'required',
            'pelanggan'        => 'required',
            'nik_pemakai'      => 'required',
            'nama_pemakai'     => 'required',
            'tipe_rusak'       => 'required',
            'penjelasan'       => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            return response()->json(['status' => 1, 'msg' => 'Sukses Di Tambah']);
        }
    }
}
