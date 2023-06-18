<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MProduk extends Model
{
    use HasFactory;

    function viewData()
    {
        $query = DB::table('tb_barang')
        ->select("kode AS kode_produk", "merk AS merk_produk", "nama AS nama_produk" , "jenis AS jenis_produk","harga AS harga_produk")
        ->orderBy("kode")
        ->get();

        return $query;
    }

    function detailData($parameter)
    {
        $query = DB::table('tb_barang')
        ->select("kode AS kode_produk", "merk AS merk_produk", "nama AS nama_produk" , "jenis AS jenis_produk","harga AS harga_produk")
        
        

        //menggunakan TO_BASE
        ->where(DB::raw("TO_BASE64(kode)"), "=", $parameter)
        ->orderBy("kode")
        ->get();

        return $query;
    }

    //fungsi untuk delete data
    function deleteData($parameter)
    {
        DB::table('tb_barang')
        ->where(DB::raw("TO_BASE64(kode)"), "=", $parameter)
        ->delete();
    }

    //fungsi untuk simpan data
    function saveData($kode, $merk, $nama, $jenis, $harga)
    {
        DB::table('tb_barang')
        ->insert([
            "kode" => $kode,
            "merk" => $merk,
            "nama" => $nama,
            "jenis" => $jenis,
            "harga" => $harga,
        ]);
    }

    //fungsi untuk update data 
    function checkUpdate($kode_lama, $kode_baru)
    {
        $query = DB::table('tb_barang')
        ->select("kode")
        ->where("kode", "=", $kode_baru)
        ->where(DB::raw("TO_BASE64(kode)"), "!=", $kode_lama)
        ->get();

        return $query;
    }

    //fungsi untuk ubah data
    function updateData( $kode, $merk, $nama, $jenis, $harga, $kode_lama)
    {
        DB::table('tb_barang')
        ->where(DB::raw("TO_BASE64(kode)"), "=", $kode_lama)
        ->update([
            "kode" => $kode,
            "merk" => $merk,
            "nama" => $nama,
            "jenis" => $jenis,
            "harga" => $harga,
        ]);
    }
}
