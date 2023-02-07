<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'major_id', 'date'];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'recommendation_id');
    }
}
