<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Produk::class);
    }

    public function tampil()
    {
        $tampil = DB::table('pesanan')
            ->join('produk', 'produk.id', '=', 'pesanan.produk_id')
            ->select('pesanan.*', 'produk.nama as nama_produk')
            ->get();
        return $tampil;
    }
}
