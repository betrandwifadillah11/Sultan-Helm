<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sultan Helm Store</title>
    <!-- cdn fontawesome -->
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tampilan Navbar -->
  </head>
  <body class="bg-gray-100">
    <nav class="fixed top-0 left-0 bg-white w-full shadow">
      <div class="container m-auto flex justify-between items-center text-gray-700">
        <h1 class="pl-8 py-4 text-xl font-bold">SULTAN HELM</h1>
        <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
          <li class="hover:bg-gray-200 py-4 px-6 ease-in duration-200"><a id="hLink" href="#home">Home</a></li>
          <li class="hover:bg-gray-200 py-4 px-6 ease-in duration-200"><a id="hLink" href="#produk">Produk</a></li>
          <li class="hover:bg-gray-200 py-4 px-6 ease-in duration-200"><a id="hLink" href="#Market">Market</a></li>
          <li class="hover:bg-gray-200 py-4 px-6 ease-in duration-200"><a id="hLink" href="#Contact">Contact</a></li>
          <li class="hover:bg-gray-200 py-4 px-6 ease-in duration-200"><a id="hLink" href="#About">About</a></li>
        </ul>
        <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
          <div class="w-5 h-1 bg-gray-600 mb-1"></div>
          <div class="w-5 h-1 bg-gray-600 mb-1"></div>
          <div class="w-5 h-1 bg-gray-600"></div>
          <div class="absolute top-0 -right-full h-screen w-8/12 bg-white border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
            <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
              <li class="hover:bg-gray-200 py-4 px-6 w-full">Home</li>
              <li class="hover:bg-gray-200 py-4 px-6 w-full">Produk</li>
              <li class="hover:bg-gray-200 py-4 px-6 w-full">Market</li>
              <li class="hover:bg-gray-200 py-4 px-6 w-full">Contact</li>
              <li class="hover:bg-gray-200 py-4 px-6 w-full">About</li>
            </ul>
          </div>
        </button>
      </div>
    </nav>
    
    <!-- akhiran Navbar -->

    <!-- Grid Section - Starts Here  -->
    <section id="Projects"
        class="w-fit mx-auto py-10 px-9 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

        <!--   Product card 1 - Starts Here -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://pabrikhelm.com/new/wp-content/uploads/2014/10/91b5156ab54a69d73ea554dcb4d47ffe.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">KYT</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">2 VISION</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp. 350.000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp. 370.000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   Product card 1 - Ends Here  -->

        <!--   Product card 2 - Starts Here  -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://gmhelmets.com/wp-content/uploads/2023/01/NEW-IMPREZZA-RED.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">GM</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">IMPREZA</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp. 330.000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp. 350.000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   Product card 2- Ends Here  -->

        <!--   Product card 3 - Starts Here  -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://www.surabayahelmet.com/wp-content/uploads/2020/11/1573036458_1954636837-3-aqua-blue-1.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">KYT</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">KYOTO</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp. 420.000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp. 400.000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   Product card 3 - Ends Here  -->

        <!--   Product card 4 - Starts Here  -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://gmhelmets.com/wp-content/uploads/2023/01/NEW-IMPREZZA-RED.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">GM</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">NEW-IMPREZZA-RED</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp 370,000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp 420,000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   Product card 4 - Ends Here  -->

        <!--   Product card 5 - Starts Here  -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://www.kythelmet.com/uploads/images/product/full/DSC098202.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">KYT</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">BESTIANINI 2022 REPLICA</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp 2,000,000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp 2,300,000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product card 5 - Ends Here  -->

        <!-- Product card 6 - Starts Here  -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2022/1/19/9107c717-40d6-4004-ae13-c0034753a0d5.jpg"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">KYT</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">ESPARGARO 2021 REPLICA</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp 2,300,000</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">Rp 2,800,000</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--  Product card 6 - Ends Here  -->
    </section>

    <!-- component Profile Card-->
<style>
  .dark{color:rgba(55, 65, 81,1);}
  body{background:white !important;}
</style>

<div class="holder">
  <div class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-lg m-5">
    <img class="max-h-20 w-full opacity-80 absolute top-0" style="z-index:-1" src="https://unsplash.com/photos/h0Vxgz5tyXA/download?force=true&w=640" alt="" />
    <div class="profile w-full flex m-3 ml-4 text-white">
      <img class="w-28 h-28 p-1 bg-white rounded-full" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""/>
      <div class="title mt-11 ml-3 font-bold flex flex-col">
        <div class="name break-words">Betran Dwi Fadillah</div>
        <!--  add [dark] class for bright background -->
        <div class="add font-semibold text-sm italic dark">BackEnd,FrontEnd-Admin</div>
      </div>
    </div>
    <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
      <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</div>
      <!-- <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div> -->
    </div>
  </div>
  <!-- card end -->
  <div class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-lg m-5">
    <img class="max-h-20 w-full opacity-80 absolute top-0" style="z-index:-1" src="https://unsplash.com/photos/iFPBRwZ4I-M/download?force=true&w=640" alt="" />
    <div class="profile w-full flex m-3 ml-4 text-white">
      <img class="w-28 h-28 p-1 bg-white rounded-full" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""/>
      <div class="title mt-11 ml-3 font-bold flex flex-col">
        <div class="name break-words">Dedy Adriansyah</div>
        <!--  add [dark] class for bright background -->
        <div class="add font-semibold text-sm italic dark">FrontEnd-User</div>
      </div>
    </div>
    <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
      <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</div>
      <!-- <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div> -->
    </div>
  </div>
</div>
  <!--about-->
  <div class="about py-32">
    <div class="container mx-auto px-4">
      <div class="about-box">
        <div class="box text-center">
          <h1 class="font-extrabold text-4xl mb-8">About Us</h1>
          <p class="lg:w-3/4 w-full mx-auto md:text-base text-xs">
            Toko helm Sultan helm merupakan toko helm yang menjual berbagai produk barang helm dari merek-merek helm terkenal. helm-helm yang dijual di toko ini merupakan helm original yang disuplyer dari official. harga dijamin tidak jauh dari harga official merek terkenal. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem praesentium facilis debitis quas distinctio consectetur accusamus dolorum nobis odit laudantium, a, pariatur accusantium quos itaque mollitia temporibus fugiat, nesciunt suscipit?. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque perspiciatis magni temporibus voluptatum corporis exercitationem repellat expedita debitis provident id voluptatibus, tenetur omnis, assumenda, consequuntur quos accusamus nisi distinctio minima?.
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
     <div class="max-w-2xl mx-auto px-4">
         <div class="flex justify-between items-center mb-6">
           <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
       </div>
       <form class="mb-6">
           <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
               <label for="comment" class="sr-only">Your comment</label>
               <textarea id="comment" rows="6"
                   class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                   placeholder="Write a comment..." required></textarea>
           </div>
           <button type="submit"
               class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
               Post comment
           </button>
       </form>
       <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
           <footer class="flex justify-between items-center mb-2">
               <div class="flex items-center">
                   <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                           class="mr-2 w-6 h-6 rounded-full"
                           src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                           alt="Michael Gough">Michael Gough</p>
                   <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                           title="February 8th, 2022">Feb. 8, 2022</time></p>
               </div>
               <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                   class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                   type="button">
                   <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                       xmlns="http://www.w3.org/2000/svg">
                       <path
                           d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                       </path>
                   </svg>
                   <span class="sr-only">Comment settings</span>
               </button>
               <!-- Dropdown menu -->
               <div id="dropdownComment1"
                   class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                   <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                       aria-labelledby="dropdownMenuIconHorizontalButton">
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                       </li>
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                       </li>
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                       </li>
                   </ul>
               </div>
           </footer>
           <p class="text-gray-500 dark:text-gray-400">Toko helm ori yang mudah dicari merek" ya diinginkan</p>
           <div class="flex items-center mt-4 space-x-4">
               <button type="button"
                   class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                   <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                   Reply
               </button>
           </div>
       </article>
       <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
           <footer class="flex justify-between items-center mb-2">
               <div class="flex items-center">
                   <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                           class="mr-2 w-6 h-6 rounded-full"
                           src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                           alt="Helene Engels">Helene Engels</p>
                   <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-06-23"
                           title="June 23rd, 2022">Jun. 23, 2022</time></p>
               </div>
               <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                   class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                   type="button">
                   <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                       xmlns="http://www.w3.org/2000/svg">
                       <path
                           d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                       </path>
                   </svg>
               </button>
               <!-- Dropdown menu -->
               <div id="dropdownComment4"
                   class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                   <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                       aria-labelledby="dropdownMenuIconHorizontalButton">
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                       </li>
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                       </li>
                       <li>
                           <a href="#"
                               class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                       </li>
                   </ul>
               </div>
           </footer>
           <p class="text-gray-500 dark:text-gray-400">Toko Helm yang lengkap, baguntuk orang-orang yang ingin helm bermerek</p>
           <div class="flex items-center mt-4 space-x-4">
               <button type="button"
                   class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                   <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                   Reply
               </button>
           </div>
       </article>
     </div>
   </section>
<!-- Bawahan -->
<div class="flex items-center justify-center mt-16 border-t dark:border-slate-800 pt-6 md:-mb-8"><div class="relative max-w-2xl px-4"><div class="w-full text-center text-invert"><p class="mb-2">Sultan Helm Store  <strong class="font-semibold"></strong>.</p><strong class="font-semibold">© Copyright 2023 google.com</strong>. <a target="_blank" rel="noreferrer" href="#">All rights reserved</a>. Yes, all of them (<strong>Tailwind Love</strong>).</div>
</div>
</body>
<?php /**PATH C:\xampp\htdocs\ToHelm\Frontend-User\resources\views/vw_produk.blade.php ENDPATH**/ ?>