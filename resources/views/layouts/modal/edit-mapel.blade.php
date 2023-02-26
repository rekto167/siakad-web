<input type="checkbox" id="modaledit" class="modal-toggle" wire:model="showModalEdit" />
<div class="modal modal-bottom sm:modal-middle" x-show="$showModalEdit">
    <div class="modal-box">
        <h1 class="font-bold text-lg">Edit Mata Pelajaran</h1>
        <div class="modal-body">
            <input type="text" placeholder="Contoh: Bahasa Indonesia" class="input input-bordered w-full max-w-xs"
                wire:model="mapel_edit" />
        </div>
        <div class="modal-action">
            <button class="btn btn-info" wire:click="updatemapel('{{ $item->uuid }}')">Simpan</button>
            <label for="modaledit" class="btn btn-error" wire:click="tutupmodaledit">Batal</label>
        </div>
    </div>
</div>
