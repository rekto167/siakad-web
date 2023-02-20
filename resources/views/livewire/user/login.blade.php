<div>
    <div class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-info shadow-xl mx-auto">
            <figure class="px-10 pt-10">
                <img src="{{asset('img/default/tutwuri.png')}}" alt="Shoes" width="100" height="100"/>
            </figure>
            <span class="text-center font-bold text-white">Sistem Informasi Akademik</span>
            <div class="card-body items-center text-center">
                <div class="form-control">
                    <div class="flex">
                        <label class="label cursor-pointer">
                            <input type="radio" value="guru" wire:model="loginas" name="radio-10" class="radio radio-primary checked:bg-blue-500" checked/>
                            <span class="label-text text-white font-semibold ml-2">Guru</span>
                        </label>
                        <label class="label cursor-pointer">
                            <input type="radio" value="siswa" wire:model="loginas" name="radio-10" class="radio radio-warning checked:bg-amber-500" checked/>
                            <span class="label-text text-white font-semibold ml-2">Siswa</span>
                        </label>
                    </div>
                </div>
                <input type="text" placeholder="Ketik {{$login_jenis}} anda.." class="input w-full max-w-xs" />
                <input type="password" placeholder="Ketik Password anda.." class="input w-full max-w-xs" />
                <button class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
