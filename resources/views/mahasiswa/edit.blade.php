<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-400 h-auto">
        <div class="max-w-7xl mx-auto h-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl mt-6 mx-6 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('mahasiswas.update', $mahasiswas->id) }}" method="POST" class="my-8 mx-8">
                    @csrf
                    @method('PUT')
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="name" value="{{ $mahasiswas->name }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                        border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="" required />
                        <label for="name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="nim" id="nim" value="{{ $mahasiswas->nim }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                        border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="" required />
                        <label for="nim"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300
                            transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                            peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                            peer-focus:-translate-y-6">NIM</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="jurusan" id="jurusan" value="{{ $mahasiswas->jurusan }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                        border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="" required />
                        <label for="jurusan"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300
                            transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                            peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                            peer-focus:-translate-y-6">Jurusan</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="tahun_masuk" id="tahun_masuk" value="{{ $mahasiswas->tahun_masuk }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                        border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder="" required />
                        <label for="tahun_masuk"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300
                            transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0
                            peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                            peer-focus:-translate-y-6">Tahun Masuk</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
