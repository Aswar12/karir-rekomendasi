<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nilai Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
    <h3 class="text-2xl font-bold mb-4">Daftar Nilai Mahasiswa</h3>

    <table class="min-w-full border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Nama Mahasiswa</th>
                <th class="border border-gray-300 p-2">Nama Kriteria</th>
                <th class="border border-gray-300 p-2">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaiMahasiswa as $nilai)
                <tr>
                    <td class="border border-gray-300 p-2">{{ $nilai->mahasiswa->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $nilai->kriteria->nama_kriteria }}</td>
                    <td class="border border-gray-300 p-2">{{ $nilai->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

            </div>
        </div>
    </div>
</x-app-layout>