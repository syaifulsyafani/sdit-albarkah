<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;
    protected $fillable = ['id_galeri', 'foto_galeri'];
    protected $table ='galeri';
    public $timestamps = false;
}
