<x-layouts.admin title="Manajemen Kategori Tiket">
    <div class="p-10">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-bold">Manajemen Kategori Tiket</h1>
            <a href="{{ route('admin.ticket-kategories.create') }}"
               class="btn btn-primary">Tambah Kategori</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategories as $kategori)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kategori->nama }}</td>
                            <td class="flex gap-2">
                                <a href="{{ route('admin.ticket-kategories.edit', $kategori) }}"
                                   class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('admin.ticket-kategories.destroy', $kategori) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-error text-white"
                                            onclick="return confirm('Hapus kategori ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if ($kategories->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">Belum ada kategori tiket</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>
