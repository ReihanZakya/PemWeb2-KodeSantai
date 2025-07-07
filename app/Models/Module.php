<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function materials()
    {
        return $this->hasMany(Material::class);
    }

}
