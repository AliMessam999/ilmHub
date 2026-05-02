<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bio', 'image'];

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
}
