<?php

namespace App\Http\Livewire\Mapel;

use App\Models\Mapel;
use Exception;
use Livewire\Component;

class Index extends Component
{
    public $mapel;
    public $mapel_edit;
    public $showModal = false;
    public $showModalEdit = false;

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

    public function bukamodal($data)
    {
        $this->showModal = true;
    }

    public function tutupmodal()
    {
        $this->showModal = false;
    }

    public function destroy($uuid)
    {
        try{
            $data = Mapel::where('uuid', $uuid)->firstOrFail();
            $data->delete();
            session()->flash('success', 'Berhasil hapus '.$uuid);
        } catch (Exception $error) {
            session()->flash('error', $error->getMessage());
        }
    }

    public function updatemapel($uuid)
    {
        $this->validate([
            'mapel_edit' => 'string'
        ]);

        try{
            $data = Mapel::where('uuid', $uuid)->firstOrFail();
            $data->nama = $this->mapel_edit;
            $data->save();
            session()->flash('success', 'Mapel berhasil diupdate');
            $this->tutupmodaledit();
        }catch (Exception $error){
            session()->flash('error', $error->getMessage());
            $this->tutupmodaledit();
        }
    }

    public function bukamodaledit($data)
    {
        $this->mapel_edit = $data;
        $this->showModalEdit = true;
    }
    public function tutupmodaledit()
    {
        $this->showModalEdit = false;
    }
}
