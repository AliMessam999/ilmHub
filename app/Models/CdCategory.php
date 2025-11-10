<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CdCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function menu(){
        return $this->belongsTo(CdMenu::class);
    }
    
    public function sub_categories(){
        return $this->hasMany(CdCategory::class, 'parent', 'id');
    }
    
    public function parent_item(){
        return $this->belongsTo(CdCategory::class, 'parent', 'id');
    }

    public function solutions(){
        return $this->hasMany(CdSolution::class, 'category_id');
    }

    public function news(){
        return $this->hasMany(CdNew::class,'category_id');
    }


}
