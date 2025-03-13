<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'article_number',
        'type_id',
        'material_id',
        'model_id',
        'size',
        'price',
        'stock'
    ];


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

    public function getRouteKeyName()
    {
        return 'article_number';
    }

    public function getImagePathAttribute()
    {
        return $this->ModelRing->name . '-' .
            $this->article_number . '-' .
            $this->Material->id . '.jpeg';
    }
}
