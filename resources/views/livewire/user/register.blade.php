<div>
    <div class="w-3/12 mx-auto">

        @if(session()->has('error'))
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Error! {{session('error')}}.</span>
                </div>
            </div>
        @endif
        <div wire:poll.3s>
            @if(session()->has('success'))
                <div class="alert alert-success shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Berhasil! {{session('success')}}.</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="card bg-info shadow-lg mx-auto mt-3">
            <div class="card-body text-white">
                <h1 class="card-title">Tambah Akun</h1>
                <select class="select w-full max-w-xs text-black" wire:model="role_selected">
                    <option disabled selected>Pilih role</option>
                    @foreach($list_role as $item)
                        <option value="{{$item->name}}">{{$item->alias}}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="Nama Lengkap" class="input w-full max-w-xs text-black"
                       wire:model="name"/>
                <input type="email" placeholder="Email" class="input w-full max-w-xs text-black" wire:model="email"/>
                @if($role_selected == 'super_admin' || $role_selected == 'admin')
                    <input type="text" placeholder="Username" class="input w-full max-w-xs text-black"
                           wire:model="username"/>
                @endif
                @if($role_selected == 'guru')
                    <div>
                        <input type="text" placeholder="NIP" class="input w-full max-w-xs text-black nip"
                               wire:model="nip" id="nip" name="nip" />
                    </div>
                @endif
                @if($role_selected == 'murid')
                    <input type="text" placeholder="NIS" class="input w-full max-w-xs text-black"
                           wire:model="nis" id="nis"/>
                @endif
                <input type="password" placeholder="Password" class="input w-full max-w-xs text-black"
                       wire:model="password"/>
                <div class="card-actions justify-start">
                    <button class="btn btn-primary" wire:click="create">Tambah</button>
                </div>
            </div>
        </div>
    </div>
{{--    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    <script src="{{url('js/cleave.js')}}"></script>
    <script>
        document.addEventListener('cleaveJsMount', () => {
            new Cleave('#nip', {
                delimiters: ['-'], // set delimiter "-" pada NIP
                blocks: [2, 8, 1, 6, 3], // set blok NIP
                numericOnly: true // hanya mengizinkan karakter numerik
            });
        })
    </script>
</div>
