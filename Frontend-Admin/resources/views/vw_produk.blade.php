<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Tampil Data Produk</title>
</head>
<body class="m-5">

    <nav class="text-center mb-5">
          <button onclick="gotoAdd()" id="btn_tambah" class="bg-red-300 w-32 h-10 rounded-full border-2 border-black">Tambah</button>
          <button id="btn_refresh" class="bg-slate-300 w-32 h-10 rounded-full border-2 border-black">Refresh</button>
    </nav>

     <table class="w-full">
          <thead class="text-center bg-cyan-950 text-white">
               <tr class="h-10">
                    <th class="w-1/12">Aksi</th>
                    <th class="text-left w-1/12">Kode</th>
                    <th class="text-left w-3/12">Merek Helm</th>
                    <th class="text-left w-2/12">Nama Helm</th>
                    <th class="text-left w-2/12">Jenis Helm</th>
                    <th class="text-left w-2/12">Harga Helm</th>
               </tr>
          </thead>
          <tbody class="text-center">
          @foreach ($result as $output)
               <tr>
                    <td class="pt-5 text-center">
                         <button id="btn_ubah" class="bg-green-600 w-10 h-10 rounded-lg border-2">
                              <i class="fa-solid fa-pencil text-white" onclick="gotoEdit()"></i>
                         </button>
                         <button id="btn_hapus" class="bg-red-600 w-10 h-10 rounded-lg border-2">
                              <i class="fa-solid fa-trash text-white" onclick="gotoDelete('{{$output->kode_produk}}')"></i>
                         </button>
                    </td>
                    <td class="pt-5 text-left">{{$output->kode_produk}}</td>
                    <td class="pt-5 text-left">{{$output->merk_produk}}</td>
                    <td class="pt-5 text-left">{{$output->nama_produk}}</td>
                    <td class="pt-5 text-left">{{$output->jenis_produk}}</td>
                    <td class="pt-5 text-left">{{$output->harga_produk}}</td>
               </tr>
          @endforeach
          </tbody>
     </table>

     {{-- cdn TailWinds  --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- cdn font awesome css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- cd font awesome js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    {{-- Custom JavaScript --}}
    <script>
          function gotoAdd()
          {
               location.href="{{url('/add')}}"
          }

          //buat fungsi untuk hapus data
          function gotoDelete(kode)
          {
               if(confirm("Data "+kode+" Ingin Dihapus ?") == true)
          }

          //gunsi untuk refresh
          document.querySelector("#btn_refresh").addEvenListener('click', function(){
               location.href="{{url('/')}}"
          })
    </script>

</body>
</html>