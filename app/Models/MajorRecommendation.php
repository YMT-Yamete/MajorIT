<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorRecommendation extends Model
{
    use HasFactory;

    protected $fillable = ["major_id", "recommendation_id"];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function recommendation()
    {
        return $this->belongsTo(Recommendation::class, 'recommendation_id');
    }
}
