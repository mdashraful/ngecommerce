<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarder = [];

    public $timestamps = false;

    public function order()
    {
        $this->belongsTo(Order::class);
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
