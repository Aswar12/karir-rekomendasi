<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nilai Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-400 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            <div class="bg-white rounded-xl mt-6 overflow-hidden  shadow-xl sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kriteria
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subcriteria
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiMahasiswa as $index => $nilai )
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->kriteria->nama_kriteria }}
                            </td>
                            @if ($nilai->subcriteria !== null)
                            <td class="px-6 py-4">
                                {{ $nilai->subcriteria->nama_subkriteria }}
                            </td>
                            @else
                            <td class="px-6 py-4">
                                Data Subcriteria tidak ada
                            </td>
                            @endif
                            <td class="px-6 py-4">
                                {{ $nilai->nilai }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="row flex-shrink-0">

                                    <a href="/nilaiMahasiswa-edit-{{ $nilai->id }}"
                                        class="inline-flex px-2 py-2 mx-1 mb-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg><span class="mx-1">Edit</span>
                                    </a>
                                    <form action="{{ route('nilaiMahasiswa.delete', $nilai->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex px-2 py-2 mx-2 mt-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg><span class="mx-1">Hapus</span>
                                        </button>
                                    </form>
                                    <a href="{{ route('nilaiMahasiswa.show', $nilai->mahasiswa_id ) }}"
                                        class="inline-flex px-2 py-2 mx-1  font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8V11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H13V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V13H8C7.44771 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H11V8Z"
                                                    fill="#0F0F0F"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                                    fill="#0F0F0F"></path>
                                            </g>
                                        </svg><span class="mx-1">Nilai</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</x-app-layout>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nilai Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-400 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white rounded-xl mt-6 overflow-hidden  shadow-xl sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kriteria
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sub Kriteria
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiMahasiswa as $index => $nilai)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $index+1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->mahasiswa_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->kriteria->nama_kriteria }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->nilai }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($nilai->kriteria->subcriteria as $subkriteria)
                                <span>{{ $subkriteria->nama_subkriteria }}</span>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout> --}}