<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produk extends Controller
{
    protected $frontendadmin;
    //buat konstruktor
    function __construct()
    {
        $this->frontendadmin = new \GuzzleHttp\Client(); 
    }

    function index()
    {
        //echo "Ini Halaman Home";
        //echo env("API_URL");

        //buat url (service "GET" dari server)
        $url = env("API_URL")."view";

        //ambil service "GET" dari server
        $request = $this->frontendadmin->get($url);
        
        //tampilkan hasil
        $response = $request->getBody();
        
        

        $data["result"] = json_decode($response)->Produk;

        //panggil view "vw_karyawan"
        return view("vw_produk",$data);
    }

    //tambah data
    function add()
    {
        // tampilkan view "en_karwayan"
        return view("vw_tambah");
    }

    //delete
     //buat fungsi untuk hapus data karyawan
    function delete($kode)
    {
        $parameter = base64_encode($kode);
         //buat url (service "DELETE" dari server)
         $url = env("API_URL")."delete/".$parameter;
         //ambil service "DELETE" dari server
        $request = $this->frontendadmin->delete($url);
        //tampilkan hasil
        $response = $request->getBody();
        //kirim ke "vw_produk" (fetch)
        echo $response;
    }

    function add_data($kode)
    {
        $parameter = base64_encode($kode);
         //buat url (service "DELETE" dari server)
         $url = env("API_URL")."add/".$parameter;
         //ambil service "DELETE" dari server
        $request = $this->frontendadmin->add_data($url);
        //tampilkan hasil
        $response = $request->getBody();
        //kirim ke "vw_produk" (fetch)
        echo $response;
    }

    public function store(Request $request)
    {
        
        return redirect()->route('vw_produk');
    }

}
