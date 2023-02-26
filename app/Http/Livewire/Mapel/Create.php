<?php

namespace App\Http\Livewire\Mapel;

use App\Models\Mapel;
use Exception;
use Livewire\Component;

class Create extends Component
{
    public $mapel;
    public function render()
    {
        return view('livewire.mapel.create');
    }

    public function create()
    {
        try {
            $data = Mapel::create([
                'nama' => $this->mapel
            ]);
            $this->resetForm();
            $this->dispatchBrowserEvent('tutup_modal');
            $this->emit('data_created');
        } catch (Exception $error) {
            $this->resetForm();
            $this->emit('data_created_failed', $error->getMessage());
        }
    }

    public function resetForm()
    {
        $this->mapel = null;
    }
}
