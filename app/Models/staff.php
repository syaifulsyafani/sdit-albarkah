<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $fillable = ['foto_staff','NIK', 'NIP', 'Nama','Profesi'];
    protected $table ='staff';
    public $timestamps = false;
}
