<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <title>Form Daftar Trial GSSB</title>
</head>
<body>
    <!-- Navbar -->
<section class="bg-gray-300 relative top-0 w-full z-50 shadow-md">
        <div class="w-full container ml-36 px-4 sm:px-6 lg:px-8" x-data="{open:false}">
            <nav class=" flex items-center justify-between  py-3">
                <div class="lg:flex lg:items-center mr-24 ">
                <ul class="hidden lg:w-auto lg:space-x-6 lg:flex items-center  ">
                <a href="" class=" items-center justify-center text-center flex text-xl font-semibold leading-none text-blue-600"><img src="{{asset('folder_image-login/logo.png')}}" class="w-12  my-auto" alt="">Grind Skate School </a>
                    <li><a href="/home2" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Home</a>
                    </li>

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

            </nav>         
        </div>
    </section>
<div class="flex justify-center items-center w-screen h-screen bg-white">
    <div class="container mx-auto  px-4 lg:px-20">
        <header class="flex mt-60 ">
             <h3 class="font-bold uppercase text-4xl ">Formulir Pendaftaran Trial Pass Grind Skate School</h3>
        </header>
             <form action="{{route('trialDaftar')}}" method="POST" enctype="multipart/form-data" >
             @csrf
             <fieldset>
        <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
            <div>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p class="mt-6">
                <label for="umur">Umur: </label>
                <input type="number" name="umur" placeholder="Umur" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p class= "mt-6">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label class="mr-2 ml-2 "><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p> 
            <p class="mt-6">
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
            </p>
            <p>
                <label for="nomor_telepon">Nomor Telepon </label>
                <input type="number" name="nomor_telepon" placeholder="nomor_telepon" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p>
                <label for="email">Email </label>
                <input type="email" name="email" placeholder="email" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p class="mt-8">
                <label for="pasfoto">Pas Foto </label>
                <br>
                <input type="file" accept="image/*" name="pasfoto" class="mt-6"/>
            </p> 
          
            <p class="my-2 w-1/2 lg:w-1/4 mt-12 ">
                <input type="submit" value="Daftar" name="daftar" class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline"/>
            </p>
            
         </div>
        </fieldset>
    </form>
    </div>
</div >
</body>
</html>





























