<div>
    <div class="p-2 z-0 mx-auto">
        <div class="text-sm breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('mapel') }}">Mata Pelajaran</a></li>
            </ul>
        </div>
        @if (session('success'))
            <div class="alert alert-success shadow-lg w-1/2 mb-3">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif
        <label class="btn btn-info" for="modaltambah">Tambah</label>
        <div class="overflow-x-auto mt-3">
            <table class="table table-compact w-1/2 z-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <button class="btn btn-sm btn-error">Hapus</button>
                                <button class="btn btn-sm btn-info">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <input type="checkbox" id="modaltambah" class="modal-toggle" wire:model="showModal" />
    <div class="modal modal-bottom sm:modal-middle" x-show="$showModal">
        <div class="modal-box">
            <h1 class="font-bold text-lg">Tambah Mata Pelajaran</h1>
            <div class="modal-body">
                <input type="text" placeholder="Contoh: Bahasa Indonesia"
                    class="input input-bordered w-full max-w-xs" wire:model="mapel" />
            </div>
            <div class="modal-action">
                <button class="btn btn-info" wire:click="create">Simpan</button>
                <label for="modaltambah" class="btn btn-error" wire:click="tutupmodal">Batal</label>
            </div>
        </div>
    </div>
</div>
