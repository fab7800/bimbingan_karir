<x-layouts.admin title="Edit Kategori Tiket">
    <div class="p-10 max-w-xl">
        <h1 class="text-2xl font-bold mb-6">Edit Kategori Tiket</h1>

        <form method="POST"
              action="{{ route('admin.ticket-kategories.update', $ticket_kategory) }}">
            @csrf
            @method('PUT')

            <div class="form-control mb-4">
                <label class="label font-semibold">Nama Kategori</label>
                <input type="text" name="nama"
                       class="input input-bordered w-full"
                       value="{{ $ticket_kategory->nama }}" required>
            </div>

            <div class="flex gap-2">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('admin.ticket-kategories.index') }}"
                   class="btn btn-ghost">Batal</a>
            </div>
        </form>
    </div>
</x-layouts.admin>
