<x-app-layout>
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
</x-app-layout>
