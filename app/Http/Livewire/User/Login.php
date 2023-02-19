<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Login extends Component
{
    public $loginas;
    public $login_jenis = 'username';

    public function render()
    {

        if ($this->loginas) {
            if ($this->loginas == 'admin') {
                $this->login_jenis = 'username';
            } elseif ($this->loginas == 'super_admin') {
                $this->login_jenis = 'username';
            } elseif ($this->loginas == 'guru') {
                $this->login_jenis = 'NIP';
            } elseif ($this->loginas == 'siswa') {
                $this->login_jenis = 'NIS';
            } else {
                $this->login_jenis = 'username';
            }
        }
        return view('livewire.user.login');
    }
}
