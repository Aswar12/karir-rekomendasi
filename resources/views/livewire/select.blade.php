<div>
    <div class="relative z-0 w-full mb-6 group">
        <select name="kriteria_id" id="kriteria_id" wire:model="kriteria_id"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
            <option value="#">-Pilih Kriteria-</option>
            @foreach($kriterias as $kriteria)
            <option value="{{ $kriteria->id }}">{{ $kriteria->nama_kriteria }}</option>
            @endforeach
        </select>
        <label for="kriteria_id"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kriteria</label>
    </div>
    {{-- @if ((count($subkriterias)>0)) --}}
    <div class="relative z-0 w-full mb-6 group">
        <select name="subcriteria_id" id="subcriteria_id" wire:model="subcriteria_id"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
            <option value="#">-Pilih Sub Kriteria-</option>
            @foreach($subkriterias as $subcriteria)
            <option value="{{ $subcriteria->id }}">{{ $subcriteria->nama_subkriteria }}</option>
            @endforeach
        </select>
        <label for="subcriteria_id"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subcriteria</label>
    </div>
    {{-- @endif --}}


</div>