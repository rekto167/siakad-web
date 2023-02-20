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
                        <span>Error! {{session('success')}}.</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="card bg-info shadow-lg mx-auto mt-3">
            <div class="card-body text-white">
                <h1 class="card-title">Tambah Akun</h1>
                <select class="select w-full max-w-xs text-black">
                    <option disabled selected>Pilih role</option>
                    @foreach($list_role as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="Nama Lengkap" class="input w-full max-w-xs text-black"
                       wire:model="name"/>
                <input type="email" placeholder="Email" class="input w-full max-w-xs text-black" wire:model="email"/>
                <input type="text" placeholder="Username" class="input w-full max-w-xs text-black"
                       wire:model="username"/>
                <input type="password" placeholder="Password" class="input w-full max-w-xs text-black"
                       wire:model="password"/>
                <div class="card-actions justify-start">
                    <button class="btn btn-primary" wire:click="create">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>
