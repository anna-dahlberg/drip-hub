<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public $timestamps = false;

    public function ringType()
    {
        return $this->belongsTo(RingType::class, 'type_id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }

    public function modelRing()
    {
        return $this->belongsTo(ModelRing::class, 'model_id');
    }
}
