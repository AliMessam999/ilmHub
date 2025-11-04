<?php

namespace App\Models;

use App\Models\CdCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CdSolution extends Model
{
    protected $guarded = [];
    use HasFactory, SoftDeletes;

    public function category(){
        return $this->belongsTo(CdCategory::class);
    }
}
