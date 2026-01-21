<x-layouts.admin title="Detail History">
    <div class="container mx-auto p-10">
        <div class="flex items-center mb-6">
            <h1 class="text-3xl font-semibold">Detail Pembelian</h1>
            <a href="{{ route('admin.histories.index') }}" class="btn btn-outline ml-auto">Kembali</a>
        </div>

        <div class="card bg-base-100 shadow-sm mb-8">
            <div class="card-body grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <div class="text-sm text-gray-500">Nama Pembeli</div>
                    <div class="font-semibold">{{ $order->user?->name ?? '-' }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Event</div>
                    <div class="font-semibold">{{ $order->event?->judul ?? '-' }}</div>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Tanggal Pembelian</div>
                    <div class="font-semibold">
                        {{ $order->order_date?->format('d M Y H:i') ?? $order->created_at?->format('d M Y H:i') ?? '-' }}
                    </div>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Total Harga</div>
                    <div class="font-semibold">{{ number_format($order->total_harga ?? 0, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-xl mb-4">Detail Ticket</h2>
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tipe</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order->detailOrders as $index => $detail)
                                <tr>
                                    <th>{{ $index + 1 }}</th>
                                    <td>{{ $detail->tiket?->tipe ?? '-' }}</td>
                                    <td>{{ number_format($detail->tiket?->harga ?? 0, 0, ',', '.') }}</td>
                                    <td>{{ $detail->jumlah }}</td>
                                    <td>{{ number_format($detail->subtotal_harga ?? 0, 0, ',', '.') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada detail ticket.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
