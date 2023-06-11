<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class artikel extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_id','judul_artikel', 'foto_artikel', 'isi_artikel'];
    protected $primaryKey = 'id'; 
    protected $table = 'artikel';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
