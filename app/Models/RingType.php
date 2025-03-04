<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingType extends Model
{
    use HasFactory;

    protected $table = 'ring_type';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
