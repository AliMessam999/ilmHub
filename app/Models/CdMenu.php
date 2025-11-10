<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdMenu extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Your table uses 'title' instead of 'name'
    public function getTitleAttribute($value)
    {
        return $value;
    }

    public function categories()
    {
        return $this->hasMany(CdCategory::class, 'menu_id')->whereNull('parent');
    }

    public function allCategories()
    {
        return $this->hasMany(CdCategory::class, 'menu_id');
    }
}