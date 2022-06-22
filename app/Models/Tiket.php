<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $table ='tikets';
    protected $fillable = [
        'namapemesan',
        'namamuseum',
        'tanggal',
        'notelp',
        'jumlahtiket',
        'totalHrgtiket',
    ];
}
