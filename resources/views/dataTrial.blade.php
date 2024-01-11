<x-app-layout>
        <div class="bg-white">
            <table class=" border-collapse border border-slate-500 min-w-full divide-y divide-gray-200 table-fixed border-1 ">
                <thead>
                    <tr>
                        <th class="border border-slate-600">No</th>
                        <th class="border border-slate-600">Nama</th>
                        <th class="border border-slate-600">Umur</th>
                        <th class="border border-slate-600">jenis_kelamin</th>
                        <th class="border border-slate-600">alamat</th>
                        <th class="border border-slate-600">Nomor Telepon</th>
                        <th class="border border-slate-600">email</th>
                        <th class="border border-slate-600">pasfoto</th>
                        <th class="border border-slate-600">Config</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200  :divide-gray-700">
                    <!-- Pengecekan data yang ada -->
                    @if($data->count()) 
                    <!-- Looping data yang ada/dicari -->
                        @foreach($data as $index => $datas)
                        <tr>
                            <td class='border border-slate-600 text-center px-8'>{{$index+1}} </td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->nama}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->umur}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->jenis_kelamin}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->alamat}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->nomor_telepon}}</td>
                            <td class='border border-slate-600 text-center px-8'>{{$datas->email}}</td>
                            <td><img src="{{ asset('storage/' . $datas->pasfoto) }}"  class="h-l w-l" /></td>
                            <!-- <td class='border border-slate-600 text-center px-8'>{{$datas->pasfoto}}</td> -->
                            <td class='border border-slate-600 text-center px-8'>
                                <form action="{{ url('/siswa/delete/'. $datas->id) }}" method='POST'>
                                @csrf
                                @method('delete')
                            <button>Hapus</button>
                            </form>
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
