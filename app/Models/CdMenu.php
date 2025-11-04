<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CdMenu extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    public function categories(){
        return $this->hasMany(CdCategory::class,'menu_id');
    }
}
