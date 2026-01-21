<x-layouts.admin title="Tambah Kategori Tiket">
    <div class="p-10 max-w-xl">
        <h1 class="text-2xl font-bold mb-6">Tambah Kategori Tiket</h1>

        <form method="POST" action="{{ route('admin.ticket-kategories.store') }}">
            @csrf

            <div class="form-control mb-4">
                <label class="label font-semibold">Nama Kategori</label>
                <input type="text" name="nama"
                       class="input input-bordered w-full"
                       placeholder="Contoh: VIP" required>
            </div>

            <div class="flex gap-2">
                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.ticket-kategories.index') }}"
                   class="btn btn-ghost">Batal</a>
            </div>
        </form>
    </div>
</x-layouts.admin>
