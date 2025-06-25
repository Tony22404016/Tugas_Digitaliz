<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    //Nama tabel yang sudah ada di database
    protected $table = 'proyek';

    //kolom primary key (default 'id', kita sesuaikan)
    protected $primaryKey = 'id_proyek';

    //kolom  yang bisa diisi (fillable)
    protected $fillable = [
        'nama_proyek',
        'client',
        'kepala_proyek',
        'tanggal_mulai',
        'tanggal_selesai',
        'kemajuan',
        
    ];

    public $timestamps = false;
}
