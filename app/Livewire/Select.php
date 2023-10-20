<?php

namespace App\Livewire;

use App\Models\Kriteria;
use App\Models\Subcriteria;
use Livewire\Component;

class Select extends Component
{



    public $subcriteria_id;
    public $kriteria_id;
    public $subkriterias = [];
    public function render()
    {


        if (!empty($this->kriterias)) {
            $this->subkriterias = Subcriteria::where('id_kriteria', $this->kriteria_id)->get();
        }
        $kriterias = Kriteria::all();

        return view('livewire.select')->with([
            'kriterias' => $kriterias,
            'subkriterias' =>  $this->subkriterias
        ]);
    }
}