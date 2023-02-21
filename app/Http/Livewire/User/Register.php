<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Profile;
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
    public $nip;
    public $nis;
    public $role_selected;
    public $gender;
    public $alamat;

    public function mount()
    {
        $this->list_role = Role::all();
        $this->emit('cleaveJsMount');
    }

    public function render()
    {
        return view('livewire.user.register');
    }

    public function create()
    {
        try {
            if($this->role_selected == 'super_admin' || $this->role_selected == 'admin'){
                $user = User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'username' => $this->username,
                ]);
                $user->assignRole($this->role_selected);
                session()->flash('success', 'User created successfully');
            } elseif($this->role_selected == 'guru'){
                $user = User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'nip' => $this->nip,
                ]);
                $user->assignRole($this->role_selected);
                session()->flash('success', 'User created successfully');
            } elseif($this->role_selected == 'murid'){
                $user = User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'nis' => $this->nis,
                ]);
                $user->assignRole($this->role_selected);
                session()->flash('success', 'User created successfully');
            }
            $profile = Profile::create([
                'user_uuid' => $user->uuid,
                'alamat' => $this->alamat,
                'gender' => $this->gender
            ]);
        }catch (\Exception $error)
        {
            session()->flash('error', $error->getMessage());
        }
    }
}
