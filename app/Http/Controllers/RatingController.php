<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rateRecommendation(Request $request, $recommendation_id) {
        if(!isset($request->feedback)) {
            $feedback = '';
        }
        else {
            $feedback = $request->feedback;
        }
        Rating::create([
            'rate' => intval($request->rate),
            'feedback' => $feedback,
            'recommendation_id' => $recommendation_id,
        ]);
        session()->flash('alertClass', 'btn-success');
        return back()->with('msg', 'Thank you for your rating.');
    }
}
