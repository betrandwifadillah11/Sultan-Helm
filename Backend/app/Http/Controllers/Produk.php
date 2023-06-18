<?php

namespace App\Http\Controllers;

use App\Models\MProduk;
use Illuminate\Http\Request;

class Produk extends Controller
{
    protected $model;

    
    function __construct()
    {
        $this->model = new MProduk();
    }


    function view()
    {
        //ambil fungsi viewdata
        $data = $this->model->viewData();


        return response([
            "Produk" => $data
        ], http_response_code());
    }


    function detail($parameter)
    {
        //ambil fungsi detailData
        $data = $this->model->detailData($parameter);


        return response([
            "Produk" => $data
        ], http_response_code());
    }


    //buat fungsi untuk hapus data
    function delete($parameter)
    {
        // cek apakah data tersedia atau tidak
        $cek_data = $this->model->detailData($parameter);

        //jikta data ditemukan
        if(count($cek_data) == 1)
        {
            //hapus data sesiao mol 
            $this->model->deleteData($parameter);
            // buat pesan 
            $status = 1;
            $pesan = "Data Berhasil Dihapus";
        }
        //jika data tidak ditemukan
        else
        {
            // buat pesan 
            $status = 0;
            $pesan = "Data Gagal Dihapus ! (KODE tidak ditemukan!)";
        }

        //tampilkan hasil responds
        return response([
            "status" => $status,
            "pesan" => $pesan,
        ], http_response_code());

    }

    //fungsi untuk simpan data
    function insert(Request $req)
    {

        //ambil data dari hasil input
        $data = [
            "kode" => $req->kode_produk,
            "merk" => $req->merk_produk,
            "nama" => $req->nama_produk,
            "jenis" => $req->jenis_produk,
            "harga" => $req->harga_produk,
        ];

        //cek apakah data sudah tersimpan/belum
        $parameter = base64_encode($data["kode"]);
        $cek_data = $this->model->detailData($parameter);

        //jika data tidak ditemukan
        if(count($cek_data) == 0)
        {
            //simpan data
            $this->model->saveData($data["kode"],$data["merk"],$data["nama"],$data["jenis"],$data["harga"]);
            $status = 1;
            $pesan = "Data berhasil disimpan";
        }
        //jika data ditemukan
        else
        {
            $status = 0;
            $pesan = "Data gagal disimpan ! KODE sudah pernah tersimpan";
        }
        //tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan,
        ], http_response_code());
    }

    //fungsi update
    function update($parameter, Request $req)
    {
        //ambil data dari hasil input
        $data = [
            "kode" => $req->kode_produk,
            "merk" => $req->merk_produk,
            "nama" => $req->nama_produk,
            "jenis" => $req->jenis_produk,
            "harga" => $req->harga_produk,
        ];

        //cek apakah data sudah tersimpan/belum
        $cek_data = $this->model->checkUpdate($parameter, $data["kode"]);

        //jika data tidak ditemukan
        if(count($cek_data) == 0)
        {
            //update data
            $this->model->updateData($data["kode"],$data["merk"],$data["nama"],$data["jenis"],$data["harga"], $parameter);

            //buat pesan
            $status = 1;
            $pesan = "Data berhasil diubah";
        }
        //jika data ditemukan
        else
        {
            //buat pesan
            $status = 0;
            $pesan = "Data gagal diubah ! KODE sudah pernah tersimpan";
        }
        //tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan,
        ], http_response_code());

    }
}
