<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CdFooter extends Model
{
    use HasFactory, SoftDeletes;

    public function menu(){
        return $this->belongsTo(CdMenu::class, 'menu_id');
    }

    public function category()
{
      return $this->belongsTo(CdCategory::class, 'category_id');
}

public function sub_category()
{
    return $this->belongsTo(CdCategory::class, 'sub_category_id');
}

    
}