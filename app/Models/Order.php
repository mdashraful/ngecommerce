<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarder = [];

    public function customer()
    {
        $this->belongsTo(User::class);
    }

    public function processor()
    {
        $this->belongsTo(User::class, 'processed_by');
    }

    public function products()
    {
        $this->hasMany(Product::class);
    }
}
