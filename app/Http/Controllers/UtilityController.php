<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Validator;
use App\Models\Utility;
use App\Models\Pelanggan;
use App\Models\Pjpp;

class UtilityController extends Controller
{
    //
    public function index()
    {
        # code...
        $kode  = "G001";
        $data = [
            'title'      => 'Utility',
            'data'       => Pjpp::where('kode_dc', $kode)->get(),
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
        $sla            = $req->sla_jam;
        $penjelasan     = $req->penjelasan;
        $departement    = $req->departement;

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
            Pjpp::create([
                'kode_dc'            => "G001",
                'no_pjpp'             => "PJPP01",
                'utility'            => $utility,
                'deskripsi'          => $deskripsi,
                'kode_pelanggan'     => $pelanggan,
                'nik_pemakai'        => $nik_pemakai,
                'nama_pemakai'       => $nama_pemakai,
                'tipe_rusak'         => $tipe_rusak,
                'sla'                => $sla,
                'penjelasan'         => $penjelasan,
                'tipe_transaksi'     => 'PJPP Utility',
                'tipe_reparasi'      => 'DC Utility',
                'status'             => 'Menunggu Approval',
                'pembuat'            => "user",
                'atas_pembuat'       => "user",
                'tgl_buat'           => "03 Oktober 2021 , 08:41:44",
                'tgl_ubah'           => "03 Oktober 2021 , 09:41:44",
                'status_dihapus'     => "Menunggu Approval",
                'utility'            => "-",
                'unit_utility'       => "HANDHELD",
                'merk'               => "MOTOROLA",
                'no_seri'            => "D001308MOT",
                'nik_pemakai'        => "2015045465",
                'nama_pemakai'       => "DASEP DEPIYAWAN",
                'umur'               => "-",
                'pelanggan'          => "G001 - DC JKT 1",
                'gudang'             => "G001 - DC JAKARTA",
                'cabang'             => "002 - JAKARTA",
                'unit'               => "PT INDOGROSIR",
                'tipe_rusak'         => "Urgent",
                'sla'                => "98",
                'penjelasan'         => "Secepatnya",
                'tgl_approve'        => ""
            ]);
            return response()->json(['status' => 1, 'msg' => 'Sukses Di Tambah']);
        }
    }
}
