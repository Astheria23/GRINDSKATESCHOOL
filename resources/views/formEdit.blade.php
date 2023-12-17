<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Formulir Perubahan Data Siswa Grind Skate School</title>
</head>
<body>
<div class="flex justify-center items-center w-screen h-screen bg-white">
    <div class="container mx-auto my-4 px-4 lg:px-20">
        <header class="flex">
             <h3 class="font-bold uppercase text-5xl">Formulir Perubahan Data Siswa Grind Skate School</h3>
        </header>
             <form action="{{ url('/siswa/update/' . $student->id) }}"   method="POST">
             @csrf
             <fieldset>
        <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
            <div>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p>
                <label for="umur">Umur: </label>
                <input type="number" name="umur" placeholder="Umur" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
            <p>
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
            <p class="my-2 w-1/2 lg:w-1/4">
                <input type="submit" value="Simpan" name="simpan" class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline"/>
            </p>
         </div>
        </fieldset>
    </form>
    </div>
</div >
</body>
</html>