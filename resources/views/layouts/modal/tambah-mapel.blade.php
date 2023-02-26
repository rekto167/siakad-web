<input type="checkbox" id="modaltambah" class="modal-toggle" wire:model="showModal" />
<div class="modal modal-bottom sm:modal-middle" x-show="$showModal">
    <div class="modal-box">
        <h1 class="font-bold text-lg">Tambah Mata Pelajaran</h1>
        <div class="modal-body">
            <input type="text" placeholder="Contoh: Bahasa Indonesia" class="input input-bordered w-full max-w-xs"
                wire:model="mapel" />
        </div>
        <div class="modal-action">
            <button class="btn btn-info" wire:click="create">Simpan</button>
            <label for="modaltambah" class="btn btn-error" wire:click="tutupmodal">Batal</label>
        </div>
    </div>
</div>
