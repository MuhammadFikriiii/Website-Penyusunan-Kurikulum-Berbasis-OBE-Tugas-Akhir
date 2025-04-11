@extends('layouts.app')

@section('content')
<div class="mr-20 ml-20">
    <h2 class="text-2xl font-bold text-gray-700 mb-4 text-center">Daftar Capaian Profil Lulusan</h2>
    <hr class="border-t-4 border-black my-8">
        @if(session('success'))
        <div id="alert" class="bg-green-500 text-white px-4 py-2 rounded-md mb-4 text-center relative">
            <span class="font-bold">{{ session('success') }}</span>
            <button onclick="document.getElementById('alert').style.display='none'"
                class="absolute top-1 right-3 text-white font-bold text-lg">
                &times;
            </button>
        </div>
        @endif

        @if(session('sukses'))
        <div id="alert" class="bg-red-500 text-white px-4 py-2 rounded-md mb-4 text-center relative">
            <span class="font-bold">{{ session('sukses') }}</span>
            <button onclick="document.getElementById('alert').style.display='none'"
                class="absolute top-1 right-3 text-white font-bold text-lg">
                &times;
            </button>
        </div>
        @endif
    
        <div class="flex justify-between mb-4">
            <div class="space-x-2">
                <a href="{{ route('admin.capaianprofillulusan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    👤 Tambah Capaian Profil Lulusan
                </a>
                <a href="" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                    📄 Ekspor ke Excel
                </a>
            </div>
        </div>
    
        <div class="flex items-center justify-between mb-3">
            <label for="entries" class="text-gray-600 mr-2">Show</label>
            <select id="entries" class="border border-gray-300 px-3 py-2 rounded-md mr-2">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="text-gray-600">entries</span>
            <div class="ml-auto justify-between">
                <input type="text" id="search" placeholder="Search..." 
                    class="border border-gray-300 px-3 py-2 rounded-md">
            </div>
        </div>
        <div class="bg-white shadow-lg overflow-hidden">
            <table class="w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
                <thead class="bg-green-800 text-white border-b">
                    <tr>
                        <th class="py-3 px-4 min-w-[10px] text-center font-bold uppercase ">No.</th>
                        <th class="py-3 px-6 min-w-[10px] text-center font-bold uppercase">Prodi</th>
                        <th class="py-3 px-6 min-w-[10px] text-center font-bold uppercase">Kode CPL</th>
                        <th class="py-3 px-6 min-w-[10px] text-center font-bold uppercase">Deskripsi CPL</th>
                        <th class="py-3 px-6 min-w-[10px] text-center font-bold uppercase">Status CPL</th>
                        <th class="py-3 px-6 font-bold uppercase min-w-[10px] text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($capaianprofillulusans as $index => $capaianprofillulusan)
                    <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-200 border-b">
                        <td class="py-3 px-6 min-w-[10px] text-center">{{ $index + 1 }}</td>
                        <td class="py-3 px-6 min-w-[10px] text-center">{{ $capaianprofillulusan->nama_prodi ?? 'Tidak ada prodi' }}</td>                        </td>
                        <td class="py-3 px-6 min-w-[10px] text-center">{{ $capaianprofillulusan->kode_cpl }}</td>
                        <td class="py-3 px-6 min-w-[10px] text-justify">{{ $capaianprofillulusan->deskripsi_cpl }}</td>
                        <td class="py-3 px-6 min-w-[10px] text-center">{{ $capaianprofillulusan->status_cpl }}</td>
                        <td class="py-3 px-6 min-w-[10px] flex justify-center items-center space-x-2">
                            <a href="#" class="bg-green-500 font-bold text-white px-3 py-1 rounded-md hover:bg-green-600">🛈 Detail</a>
                            <a href="{{ route('admin.capaianprofillulusan.edit', $capaianprofillulusan->id_cpl) }}" class="bg-yellow-500 text-white font-bold px-3 py-1 rounded-md hover:bg-yellow-600">✏️ Ubah</a>
                            <form action="{{ route('admin.capaianprofillulusan.destroy',$capaianprofillulusan->id_cpl ) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600" onclick="return confirm('Hapus user ini?')">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection