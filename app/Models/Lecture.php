<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'speaker_id',
        'video_url',
        'language',
        'date'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
