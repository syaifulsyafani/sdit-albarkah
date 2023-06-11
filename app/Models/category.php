<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded = ['catergory_id'];
    protected $fillable = ['category_id','slug_cat','nama_cat'];
    protected $table ='category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    public function artikel()
    {
        return $this->hasMany(artikel::class);
    }
}
