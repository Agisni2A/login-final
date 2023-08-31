<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kodeItem', 'namaItem', 'kategori', 'brand', 'type', 'detail',
        'warehouse', 'lokasiItem', 'tglPembelian', 'kerusakan',
        'peminjam', 'keterangan', 'kondisi', 'status'
    ];
}
