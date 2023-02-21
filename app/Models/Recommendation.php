<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date'];

    public function rating()
    {
        return $this->hasOne(Rating::class, 'recommendation_id');
    }

    public function major_recommendations()
    {
        return $this->hasMany(MajorRecommendation::class, 'recommendation_id');
    }
}
