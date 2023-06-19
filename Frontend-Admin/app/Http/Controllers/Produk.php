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
}
