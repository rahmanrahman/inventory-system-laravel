<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrgRetur extends Model
{
    use HasFactory;

    protected $table = 'barang_retur';

    protected $fillable = [
        'no_brg_retur',
        'id_barang',
        'jml_brg_retur',
        'total',
        'created_at',
        'updated_at'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
