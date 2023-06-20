@extends('template_produk')
@section('title_template')
    <title>Tambah Data Helm</title>
@endsection

@section('body_template')
<div class="container mx-auto px-4 py-8">
     <h1 class="text-3xl font-bold mb-4">Tambah Data Produk</h1>

     <form method="POST" action="{{ route('produk.store') }}" class="max-w-md">
         @csrf

         <div class="mb-4">
             <label for="kode" class="block text-gray-700 text-sm font-bold mb-2">Kode Produk:</label>
             <input type="text" name="kode" id="kode" required
                 class="border border-gray-400 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
         </div>

         <div class="mb-4">
             <label for="merk" class="block text-gray-700 text-sm font-bold mb-2">Merek Helm:</label>
             <input type="text" name="merk" id="merk" required
                 class="border border-gray-400 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
         </div>

         <div class="mb-4">
             <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Helm:</label>
             <input type="text" name="nama" id="nama" required
                 class="border border-gray-400 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
         </div>

         <div class="mb-4">
             <label for="jenis" class="block text-gray-700 text-sm font-bold mb-2">Jenis Helm:</label>
             <input type="text" name="jenis" id="jenis" required
                 class="border border-gray-400 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
         </div>

         <div class="mb-4">
             <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga Helm:</label>
             <input type="number" name="harga" id="harga" required
                 class="border border-gray-400 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
         </div>

         <button type="submit"
             class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
             Tambah
         </button>
     </form>
 </div>
@endsection
