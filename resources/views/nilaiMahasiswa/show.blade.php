<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nilai' ) }} <b> {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-400 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            <a href={{ route('nilaiMahasiswa.create', $user->id) }}
                class="text-gray-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4
                focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2
                dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500
                dark:focus:ring-blue-800"><Span>
                </Span> Tambah</a>
            <div class="bg-white rounded-xl mt-6 overflow-hidden  shadow-xl sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
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

                                </div>
                            </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>