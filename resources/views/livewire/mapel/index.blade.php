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
        <label class="btn btn-info" for="modaltambah" wire:click="bukamodal">Tambah</label>
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
                                <button class="btn btn-sm btn-error"
                                    wire:click="destroy('{{ $item->uuid }}')">Hapus</button>
                                <label class="btn btn-sm btn-success"
                                    wire:click="bukamodaledit('{{ $item->nama }}')">Edit</label>
                            </td>
                            @include('layouts.modal.edit-mapel')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layouts.modal.tambah-mapel')
</div>
