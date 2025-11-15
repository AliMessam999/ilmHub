<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CdFeature extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function images(){
        return $this->hasMany(CdFeatureImage::class, 'feature_id', 'id');
    }

    public function category(){
        return $this->belongsTo(CdCategory::class, 'sub_category_id', 'id');
    }
}
