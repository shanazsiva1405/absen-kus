<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'jenis',
        'alamat',
        'email',
        'telepon',
    ];
}
