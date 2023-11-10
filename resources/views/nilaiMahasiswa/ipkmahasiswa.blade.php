<x-app-layout>
    <!-- ... code sebelumnya ... -->

    <div class="py-10 bg-gray-400 h-auto ">
        <div class="max-w-7xl mx-auto h-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl mt-6 mx-6 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('nilaiMahasiswa.store', $user->id) }}" class="my-8 mx-8" method="POST">
                    @csrf

                    <!-- ... elemen lainnya ... -->

                    <div class="relative z-0 w-full mb-6 group">
                        <!-- Input untuk nilai -->
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <select name="kriteria_id" id="kriteria_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option value="#">-Pilih Kriteria-</option>
                            @foreach($kriteriaList as $kriteria)
                            <option value="{{ $kriteria->id }}">{{ $kriteria->nama_kriteria }}</option>
                            @endforeach
                        </select>
                        <label for="kriteria_id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kriteria</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <select name="subcriteria_id" id="subcriteria_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option value="#">-Pilih Sub Kriteria-</option>
                            @foreach($SubcriteriaList as $subcriteria)
                            <option value="{{ $subcriteria->id }}">{{ $subcriteria->nama_subkriteria }}</option>
                            @endforeach
                        </select>
                        <label for="subcriteria_id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subcriteria</label>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="nilai" id="nilai"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="nilai"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nilai</label>
                    </div>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('kriteria_id').addEventListener('change', function() {
            var kriteria_id = this.value;
            var subcriteria_select = document.getElementById('subcriteria_id');
    
            // Hapus semua opsi saat ini
            subcriteria_select.innerHTML = '<option value="#">-Pilih Sub Kriteria-</option>';
    
            // Tambahkan opsi baru berdasarkan kriteria yang dipilih
            @foreach($SubcriteriaList as $subcriteria)
                if({{ $subcriteria->id_kriteria }} == kriteria_id) {
                    var option = document.createElement('option');
                    option.value = {{ $subcriteria->id }};
                    option.text = '{{ $subcriteria->nama_subkriteria }}';
                    subcriteria_select.add(option);
                }
            @endforeach
        });
    </script>

</x-app-layout>