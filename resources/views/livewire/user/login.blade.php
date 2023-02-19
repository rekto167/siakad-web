<div>
    <div class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-info shadow-xl mx-auto">
            <figure class="px-10 pt-10">
                <img src="{{asset('img/default/tutwuri.png')}}" alt="Shoes" width="100" height="100"/>
            </figure>
            <span class="text-center font-bold text-white">Sistem Informasi Akademik</span>
            <div class="card-body items-center text-center">
                <select class="select w-full max-w-xs" wire:model="loginas">
                    <option disabled selected>Anda login sebagai ?</option>
                    <option value="super_admin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
                <input type="text" placeholder="Ketik {{$login_jenis}} anda.." class="input w-full max-w-xs" />
                <input type="password" placeholder="Ketik Password anda.." class="input w-full max-w-xs" />
                <button class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
