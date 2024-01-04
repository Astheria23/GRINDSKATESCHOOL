<x-app-layout>
        <div>
            <table class=" border-collapse border border-slate-500 min-w-full divide-y divide-gray-200 table-fixed border-1 ">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-slate-600">No</th>
                        <th class="border border-slate-600">Nama</th>
                        <th class="border border-slate-600">Umur</th>
                        <th class="border border-slate-600">alamat</th>
                        <th class="border border-slate-600">Nomor Telepon</th>
                        <th class="border border-slate-600">email</th>
                        <th class="border border-slate-600">Config</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-gray-800 :divide-gray-700">
                    <!-- Pengecekan data yang ada -->
                    @if($data->count()) 
                    <!-- Looping data yang ada/dicari -->
                        @foreach($data as $index => $datas)
                        <tr>
                            <td class='border border-slate-600 text-center px-8'>{{$index+1}} </td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->nama}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->umur}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->alamat}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->nomor_telepon}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->email}}</td>
                            <td class='border border-slate-600 text-center px-8'>
                            <a href="{{ url('formEdit/'.$datas->id) }}" class="btn btn-danger">Edit</a>
                            <a href="{{ url('/siswa/delete/'. $datas->id) }}">Hapus</a>
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
