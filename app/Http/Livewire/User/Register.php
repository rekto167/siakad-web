<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Register extends Component
{
    public $list_role;
    public $name;
    public $email;
    public $password;
    public $username;

    public function mount()
    {
        $this->list_role = Role::all();
    }

    public function render()
    {
        return view('livewire.user.register');
    }

    public function create()
    {
        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
                'password' => Hash::make($this->password)
            ]);
            session()->flash('success', $user->username.' Berhasil di tambahkan.');
        }catch (\Exception $error)
        {
            session()->flash('error', $error->getMessage());
        }
    }
}
