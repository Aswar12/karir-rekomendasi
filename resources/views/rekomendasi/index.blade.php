<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rekomendasi') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-400 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <a href={{ route('rekomendasi.create') }}
                class="text-gray-700  hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><Span>
                </Span> Tambah</a>
            <div class="bg-white rounded-xl mt-6 overflow-hidden  shadow-xl sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Skor Alternatif
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rekomendasi Pekerjaan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekomendasis as $index => $rekomendasi )
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $index+1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rekomendasi->user->nim }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rekomendasi->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rekomendasi->total_skor }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($alternatifs as $alternatif )
                                @if($rekomendasi->total_skor >= $alternatif->total_skor )
                                {{ $alternatif->perkerjaan->name_pekerjaan}} <br class="p-2">
                                @endif
                                @endforeach
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="mt-5 text-center">
                {{ $rekomendasis->links() }}
            </div> --}}

        </div>
    </div>
    </div>
</x-app-layout>