<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketKategori extends Model
{
    use HasFactory;

    protected $table = 'tickets_kategories';

    protected $fillable = ['nama'];

    public function tickets()
    {
        return $this->hasMany(Tiket::class, 'tickets_kategory_id');
    }
}
