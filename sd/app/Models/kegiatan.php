<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $fillable = ['id_kegiatan','judul_kegiatan', 'foto_kegiatan', 'isi_kegiatan'];
    protected $table ='kegiatan';
    public $timestamps = false;
}
