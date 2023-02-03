<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Rating;
use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function showRecommendation($id)
    {
        if (count(Recommendation::where('id', $id)->where('user_id', Auth()->user()->id)->get()) > 0) {
            $recommendation = Recommendation::find($id);
            $ratingCount = count(Rating::where('recommendation_id', $id)->get());
            return view('Recommendation.index', compact('recommendation', 'ratingCount'));
        }
    }

    public function calculateRecommendation(Request $request)
    {
        // -1 to remove token
        $totalRequestedValues = count($request->all()) - 1;

        for ($i = 0; $i < $totalRequestedValues; $i++) {
            // value will be in this format -> major,score
            $value = $request->get('quiz_' . $i + 1);

            // split the above value
            $splitted_fields = explode(',', $value);
            $major = $splitted_fields[0];
            $score = $splitted_fields[1];

            // add the scores to dictionary
            if (!isset($scores_array[$major])) {
                $scores_array[$major] = intval($score);
            } else {
                $scores_array[$major] += intval($score);
            }
        }

        $recommended_major = array_search(max($scores_array), $scores_array);

        $recommendation = Recommendation::create([
            'user_id' => Auth()->user()->id,
            'major_id' => Major::where('major', $recommended_major)->first()->id,
            'date' => date("Y-m-d"),
        ]);

        return redirect('calculating')->with('recommendation_id', $recommendation->id);;
    }

    public function showCalculatingPage()
    {
        return view('Recommendation.calculating');
    }
}
