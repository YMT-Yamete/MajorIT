<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz', 'major_id'];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}
