<?php

namespace App\Http\Livewire\Mapel;

use App\Models\Mapel;
use Exception;
use Livewire\Component;

class Index extends Component
{
    public $mapel;
    public $showModal = false;

    public function render()
    {
        $data = Mapel::all();
        return view('livewire.mapel.index', compact('data'));
    }

    public function create()
    {
        try {
            $data = Mapel::create([
                'nama' => $this->mapel
            ]);
            session()->flash('success', 'Mapel berhasil ditambahkan');
            $this->resetForm();
            $this->tutupmodal();
        } catch (Exception $error) {
            $this->resetForm();
            session()->flash('error', $error->getMessage());
        }
    }

    public function resetForm()
    {
        $this->mapel = null;
    }

    public function bukamodal()
    {
        $this->showModal = true;
    }

    public function tutupmodal()
    {
        $this->showModal = false;
    }
}
