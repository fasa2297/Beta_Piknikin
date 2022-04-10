<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;
    protected $table ='museums';
    protected $filltable = [
        'nama',
        'alamat',
        'deskripsi',
        'jambuka',
        'hargatiket',
        'katagori',
        'namafoto'
    ];
}
