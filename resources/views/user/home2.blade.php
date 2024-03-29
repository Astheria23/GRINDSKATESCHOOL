<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Grind Skate School Bandung</title>
</head>
<body class="font-sans">

<!-- Navbar -->
<section class="bg-gray-300 fixed top-0 w-full z-50 shadow-md">
        <div class="w-full container ml-36 px-4 sm:px-6 lg:px-8" x-data="{open:false}">
            <nav class=" flex items-center justify-between  py-3">
                <div class="lg:flex lg:items-center mr-24 ">
                <ul class="hidden lg:w-auto lg:space-x-6 lg:flex items-center  ">
                <a href="" class=" items-center justify-center text-center flex text-xl font-semibold leading-none text-blue-600"><img src="{{asset('folder_image-login/logo.png')}}" class="w-12  my-auto" alt="">Grind Skate School </a>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Home</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Lessons</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Activities</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Location </a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">About Us</a>
                    </li>
                </ul>
                </div>
                <div class="lg:hidden">
                    <button
                        class="flex items-center px-3 py-2 text-blue-200 border border-blue-200 rounded dark:text-gray-400 hover:text-blue-300 hover:border-blue-300 lg:hidden"
                        @click="open =true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex">
                <a class="bg-blue-600 block px-5 py-3 text-sm font-bold text-center text-white transition duration-200 bg-white rounded md:inline-block hover:bg-yellow-400 hover:text-blue-600"
                            href="/trialDaftar"> Join With Us </a>
                </div>
            </nav>         
        </div>
    </section>
    
    <!-- Hero nya -->
    <header id="top" class="bg-black relative flex flex-col items-center justify-center h-screen overflow-hidden">
        <div class="relative z-30 px-5 text-2xl text-white rounded-xl text-center">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-300 font-black leading-7 md:leading-10">
                            Welcome To 
                            <span class="text-blue-600">Grind Skate School</span>
                            Bandung
                        </h1>
            <h1 class="mt-10 text-sm md:text-2xl font-bold text-white mb-4">Future Skateboarding Generation</h1>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
            <source src="{{asset('folder_image-login/herovid.mp4')}}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </header>
<!-- Deskripsi -->
<section class="mt-10">
<h2 class="pb-4 text-4xl font-bold text-center text-gray-800 md:text-6xl dark:text-gray-400 mb-3 py-2">
                About us
            </h2>
<div class="max-w-4xl mx-auto p-6 bg-white">
  <div class="grid grid-cols-2 gap-8">
    <div>
      <h2 class="text-xl font-bold mb-4">SKATEBOARDING</h2>
      <p class="mb-4">
      Kami melihat skateboard sebagai gaya hidup sportif. Itu bukanlah sesuatu yang Anda pelajari dalam satu hari. Itu memerlukan perhatian,
        kesabaran dan ketekunan untuk menguasai tekniknya. Bersama dengan pelatih skateboard profesional kami, kami
        pastikan Anda juga bisa belajar skateboard.
      </p>
      <h2 class="text-xl font-bold mb-4">THE LESSONS</h2>
      <p>
      Selama pelajaran remaja kami bekerja dalam kelompok kecil yang terdiri dari maksimal 12 peserta. Ada 3 skateboard
        pelatih di masing-masing kelompok. Dengan cara ini kami memastikan pembelajaran yang aman dengan ruang untuk perhatian pribadi. Kami bekerja di
        berbagai tingkatan Skateboard dari Persatuan Skateboard Bandung.
      </p>
      <p class="mt-4">
      Dalam pelajaran orang dewasa yang fleksibel kami bekerja dengan jumlah peserta maksimum per pelajaran dan di sini kami juga bekerja
        pada tingkat yang berbeda. Selalu ada cukup pelatih yang hadir untuk mengoperasikan level tersebut.
      </p>
    </div>
    <div class="p-6 border-2 border-yellow-400 rounded-lg">
      <h2 class="text-xl font-bold mb-4">GRAND SKATEBOARD SCHOOLS</h2>
      <p class="mb-4">
      Apakah Anda menjadi penasaran? Ikuti pelajaran percobaan! Jangan ragu untuk mengunjungi kami, menelepon atau mengirim email untuk mendiskusikannya
        pilihan. Anda sangat diterima di Grind Skateboard School Bandung.
      </p>
      <div class="flex justify-center">
        <img
          src="{{asset('folder_image-login/logo.png')}}"
          alt="Skateboard School Amsterdam Logo"
          class="max-h-72"
          width="400"
          height="400"
          style="aspect-ratio: 200 / 200; object-fit: cover;"
        />
      </div>
    </div>
  </div>
</div>
</section>


    <!-- Location -->
    <!-- Buqiet Skatepark -->
    <section class="mt-24">
    <h2 class="pb-4 text-4xl font-bold text-center text-gray-800 md:text-6xl dark:text-gray-400">
                Location
            </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center max-w-6xl px-4 mx-auto py-6">
  <div class="grid gap-4 items-start">
    <h1 class="font-bold text-3xl">Buqiet Skatepark</h1>
    <p class="text-lg leading-loose">
    Buqiet Skatepark adalah arena indoor skatepark pertama di Indonesia yang aktif digunakan sejak 1999 silam oleh berbagai komunitas dalam ceruk olahraga ugal-ugalan ini.
    tidak hanya dijadikan sebagai ruang berlatih dan pertandingan skateboard saja, 
    Buqiet Skatepark pun bisa digunakan untuk pengendara BMX dan agresif inline skate.
    </p>
    <p class="text-lg leading-loose">Jl. Sariwangi Selatan No.88 88, Sariwangi, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559</p>
    <button class="bg-black text-white inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">
      Get Directions
    </button>
  </div>
  <div class="grid gap-6 items-start mt-6">
    <img
      src="{{asset('folder_image-login/BuqietSkatepark.jpg')}}"
      alt="Office Location"
      width="600"
      height="600"
      class="aspect-square object-cover border border-gray-200 w-full rounded-lg overflow-hidden dark:border-gray-800"
    />
  </div>
</div>	
		<!-- Luckyline Skatepark -->
<div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-6 items-center max-w-6xl px-4 mx-auto py-6 md:grid-flow-col">
  <div class="grid gap-6 items-start">
    <img
      src="{{asset('folder_image-login/luckyLineSkatepark.jpg')}}"
      alt="Office Location"
      width="600"
      height="600"
      class="aspect-square object-cover border border-gray-200 w-full rounded-lg overflow-hidden dark:border-gray-800"
    />
  </div>
  <div class="grid gap-4 items-start">
    <h1 class="font-bold text-3xl">Lucky Line Skatepark</h1>
    <p class="text-lg leading-loose">
    Ada skate park yang terkenal di Bandung yang banyak menghasilkan atlet-atlet Skateboard yaitu di Lucky Line Skate park,
    disana banyak orang yang bermain skateboard. Keunggulan tempat ini yaitu indoor jadi lebih nyaman tidak terkena terik matahari ataupun hujan.

    </p>
    <p class="text-lg leading-loose">Lucky Square Mall, lt. jalan jakarta no 2, Jl. Terusan Jakarta No.1, Babakan Surabaya, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40291</p>
    <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">
      Get Directions
    </button>
  </div>
</div>		
</section>
</div>

 <!-- card lessons  -->
<section class="flex items-center bg-gray-100 lg:h-screen font-poppins dark:bg-gray-900 ">
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="flex flex-wrap justify-center -mx-3 pt-11">
                <div class="w-full px-1 mb-1 lg:px-2 md:w-1/2 lg:w-1/3">
                    <div class="bg-white rounded-md dark:bg-gray-800">
                        <div class="p-4">
                        <h2 class="text-2x1 font-bold mb-4">YOUTH</h2>
                            <div class="grid grid-cols-1 gap-4">
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">REGULER YOUTH LESSONS</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">SKATEBOARD PASSPORT</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">PRIVATE LESSONS YOUTH</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">TRIAL LESSONS YOUTH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 mb-6 lg:px-2 md:w-1/2 lg:w-1/3">
                    <div class="bg-white rounded-md dark:bg-gray-800">
                        <div class="p-4">
                            <h2 class="text-2x1 font-bold mb-4">ADULTS</h2>
                            <div class="grid grid-cols-1 gap-4">
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">18+ LESSONS</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">30+ LESSONS</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">PRIVATE LESSONS 18+ AND 30+</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">TRIAL LESSONS 18+ AND 30+</button>
                        </div>
                        </div>
                    </div>
                </div>
            <div class="w-full px-3 mb-6 lg:px-2 md:w-1/2 lg:w-1/3 ">
                <div class="bg-white rounded-md dark:bg-gray-800">
                <div class="p-4">
                        <h2 class="text-2x1 font-bold mb-4">ACTIVITIES  </h2>
                    <div class="grid grid-cols-1 gap-4">
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">BIRTHDAY PARTY</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">WOEKSHOP AND CLINICS</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">SCHOOLS AND BSO</button>
                            <button class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border- py-4 px-8 rounded w-full">COMPANY AND ASSOCIATION OUTINGS</button>
                        </div>
                </div>
            </div>
        </div>
    </section>
<!-- Location -->
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
   
    <!-- Documentation -->
    <section class="flex items-center py-16 bg-gray-200 dark:bg-gray-800 font-poppins">
        <div class="p-4 mx-auto max-w-7xl">
            <h2 class="pb-4 text-4xl font-bold text-center text-gray-800 md:text-6xl dark:text-gray-400">
                Our Gallery
            </h2>
            <div class="mx-auto mb-16 border-b border-red-700 w-44 dark:border-gray-400"></div>
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="w-full px-4 sm:w-1/3">
                    <div class="mb-8 ">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] lg:h-[450px] transition duration-500   group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P2.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="mb-8">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] transition duration-500  group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P3.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/3 ">
                    <div class="mb-8 ">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] transition duration-500  group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P4.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="mb-8 ">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] lg:h-[450px]  transition duration-500  group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P5.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/3 ">
                    <div class="mb-8 ">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] lg:h-[450px] transition duration-500  group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P6.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="mb-8 ">
                        <a href="#">
                            <div class="relative mb-5 overflow-hidden">
                                <img class="object-cover w-full h-[250px] transition duration-500  group-hover:origin-center hover:scale-105"
                                    src="{{asset('folder_image-login/P1.jpeg.jpeg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="flex items-center py-24 bg-stone-100 font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
            <div class="mb-10 text-center">
                <span
                    class="block mb-4 text-xs font-semibold leading-4 tracking-widest text-center text-blue-500 uppercase dark:text-gray-400">
                    Team
                </span>
                <h1 class="text-3xl font-bold capitalize dark:text-white"> Meet The Coach </h1>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-6 lg:w-1/3 sm:w-1/2 md:mb-10 ">
                    <div class="overflow-hidden ">
                        <img class="object-cover w-full transition-all hover:scale-110 h-72   "
                            src="{{asset('folder_image-login/ta.jpg')}}" alt="">
                    </div>
                    <h2 class="mt-4 text-xl font-bold dark:text-gray-400">Octa Toriq</h2>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Junior Trainer</p>
                    <div class="flex items-center justify-start mt-4">
                        <a class="inline-block mr-5 text-gray-800 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-400"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-facebook " viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a class="inline-block mr-5 text-gray-800 dark:text-gray-400 hover:text-blue-400 dark:hover:text-blue-400"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="inline-block text-gray-800 dark:text-gray-400 hover:text-pink-400 dark:hover:text-pink-400 "
                            href="https://www.instagram.com/sweet_explicit/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 mb-4 lg:w-1/3 sm:w-1/2 md:mb-10">
                    <div class="overflow-hidden">
                        <img class="object-cover w-full transition-all hover:scale-110 h-72 "
                            src="{{asset('folder_image-login/iqmal.jpeg.jpeg')}}" alt="">
                    </div>
                    <h2 class="mt-4 text-xl font-bold dark:text-gray-400">Rizqi Iqmal</h2>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Senior Coach</p>
                    <div class="flex items-center justify-start mt-4">
                        <a class="inline-block mr-5 text-gray-800 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-400"
                            href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-facebook " viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a class="inline-block mr-5 text-gray-800 dark:text-gray-400 hover:text-blue-400 dark:hover:text-blue-400"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="inline-block text-gray-800 dark:text-gray-400 hover:text-pink-400 dark:hover:text-pink-400 "
                            href="https://www.instagram.com/rzqiiqmal_?igsh=MTlhbmo5eWJsamVjNA==">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 mb-4 lg:w-1/3 sm:w-1/2 md:mb-10">
                    <div class="overflow-hidden">
                        <img class="object-cover w-full transition-all hover:scale-110 h-72 "
                            src="{{asset('folder_image-login/P10.jpeg')}}" alt="">
                    </div>
                    <h2 class="mt-4 text-xl font-bold dark:text-gray-400">Farid Al-Mustofa</h2>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Junior Trainer</p>
                    <div class="flex items-center justify-start mt-4">
                        <a class="inline-block mr-5 text-gray-800 hover:text-blue-700 dark:text-gray-400 dark:hover:text-blue-400"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-facebook " viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a class="inline-block mr-5 text-gray-800 dark:text-gray-400 hover:text-blue-400 dark:hover:text-blue-400"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="inline-block text-gray-800 dark:text-gray-400 hover:text-pink-400 dark:hover:text-pink-400 "
                            href="https://www.instagram.com/fvckingace_/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </div>
                </div>
               
                
                

            </div>
        </div>
    </section>


    <footer>
    <div class="py-6 text-center bg-yellow-400">
<span>© GrindSkateSchool2023 . All Rights Reserved</span>
    </footer>
    <script ></script>
</body>
</html>

    