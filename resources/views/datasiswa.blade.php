<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Tailwind API CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="./css/app.css"> 

    </head>
    <body class="antialiased">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>alamat</th>
                        <th>Nomor Telepon</th>
                        <th>email</th>
                        <th>Config</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Pengecekan data yang ada -->
                    @if($data->count()) 
                    <!-- Looping data yang ada/dicari -->
                        @foreach($data as $index => $datas)
                        <tr>
                            <td>{{$index+1}} </td>
                            <td>{{$datas->nama}}</td>
                            <td>{{$datas->umur}}</td>
                            <td>{{$datas->alamat}}</td>
                            <td>{{$datas->nomor_telepon}}</td>
                            <td>{{$datas->email}}</td>
                            <td>
                            <a href="{{ url('formEdit/'.$datas->id) }}">Edit</a>
                            <a href="/siswa/hapus">Hapus</a>
                            </td>
                        </tr>
                        <!-- Jika data tidak ditemukan -->
                        @endforeach
                    @else
                        <tr>
                            <td>Data tidak ditemukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
