<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent_category()
    {
        $this->belongsTo(__CLASS__);
    }

    public function child_category()
    {
        $this->hasMany(Category::class);
    }

    public function products()
    {
        $this->hasMany(Product::class);
    }
}
