<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketKategori;
use Illuminate\Http\Request;

class TicketKategoriController extends Controller
{
    public function index()
    {
        $kategories = TicketKategori::latest()->get();
        return view('admin.ticket_kategori.index', compact('kategories'));
    }

    public function create()
    {
        return view('admin.ticket_kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100|unique:tickets_kategories,nama',
        ]);

        TicketKategori::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.ticket-kategories.index')
            ->with('success', 'Kategori tiket berhasil ditambahkan.');
    }

    public function edit(TicketKategori $ticket_kategory)
    {
        return view('admin.ticket_kategori.edit', compact('ticket_kategory'));
    }

    public function update(Request $request, TicketKategori $ticket_kategory)
    {
        $request->validate([
            'nama' => 'required|string|max:100|unique:tickets_kategories,nama,' . $ticket_kategory->id,
        ]);

        $ticket_kategory->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.ticket-kategories.index')
            ->with('success', 'Kategori tiket berhasil diperbarui.');
    }

    public function destroy(TicketKategori $ticket_kategory)
    {
        $ticket_kategory->delete();

        return redirect()->route('admin.ticket-kategories.index')
            ->with('success', 'Kategori tiket berhasil dihapus.');
    }
}
