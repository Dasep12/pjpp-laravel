<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pjpp extends Model
{


    protected $fillable = [
        'no_pjpp', 'kode_dc', 'tipe_transaksi', 'tipe_reparasi', 'status', 'deskripsi', 'pembuat', 'atas_pembuat', 'tgl_buat', 'tgl_ubah', 'status_dihapus', 'utility', 'unit_utility',
        'merk', 'no_seri', 'nik_pemakai', 'nama_pemakai', 'umur', 'pelanggan', 'gudang', 'cabang',
        'unit', 'tipe_rusak', 'sla', 'penjelasan', 'tgl_approve'
    ];
    use HasFactory;


    public function FunctionName(Type $var = null)
    {
    }
}
