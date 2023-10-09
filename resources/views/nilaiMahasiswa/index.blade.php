<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nilai Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-10  bg-gray-400 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href={{ route('kriterias.create') }}
                class="text-gray-700  hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><Span>
                </Span> Tambah</a>
            <div class="bg-white rounded-xl mt-6 overflow-hidden  shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                </div>
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
                                {{ $nilai->mahasiswa_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->kriteria_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $nilai->nilai }}
                            <td class="px-6 py-4">
                                <div class="row flex-shrink-0">
                                    <a href="/nilaiMahasiswa/{{ $nilai->id }}/edit"
                                        class="flex px-2 py-2 mx-2 mt-1 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path
                                                d="M570.6 217.6L358.4 5.4c-18.7-18.7-49.1-18.7-67.9 0L5.4 290.5c-18.7 18.7-18.7 49.1 0 67.9l212.2 212.2c18.7 18.7 49.1 18.7 67.9 0l284.1-284.1c18.8-18.7 18.8-49.1.1-67.9zM400 320H288v112a16 16 0 01-32 0V320H112a16 16 0 010-32h144V176a16 16 0 0132 0v112h112a16 16 0 010 32z" />
                                        </svg><span class="mx-1">Edit</span>
                                    </a>
                                    <form action="/nilaiMahasiswa/{{ $nilai->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="flex px-2 py-2 mx-2 mt-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path
                                                    d="M400 64h-88l-32-32H168l-32 32H48A48 48 0 000 112v32a16 16 0 0016 16h16v288a48 48 0 0048 48h256a48 48 0 0048-48V160h16a16 16 0 0016-16V112a48 48 0 00-48-48zM176 432a16 16 0 01-32 0V304a16 16 0 0132 0zm96 0a16 16 0 01-32 0V304a16 16 0 0132 0zm96 0a16 16 0 01-32 0V304a16 16 0 0132 0z" />
                                            </svg><span class="mx-1">Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-3 bg-white">
                    {{ $nilaiMahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>