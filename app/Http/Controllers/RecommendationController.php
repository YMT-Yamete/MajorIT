<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\MajorRecommendation;
use App\Models\Rating;
use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function showRecommendation($id)
    {
        if (count(Recommendation::where('id', $id)->where('user_id', Auth()->user()->id)->get()) > 0) {
            $major_recommendations = MajorRecommendation::where("recommendation_id", "=", $id)->get();
            $ratingCount = count(Rating::where('recommendation_id', $id)->get());
            return view('Recommendation.index', compact('major_recommendations', 'ratingCount'));
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

        // get all majors with highest score
        $recommended_majors = [];
        foreach($scores_array as $major => $score) {
            if($score == max($scores_array)) {
                array_push($recommended_majors, $major);
            }
        }

        // create new recommendation
        $recommendation = Recommendation::create([
            'user_id' => Auth()->user()->id,
            'date' => date("Y-m-d"),
        ]);

        // add recommended majors
        foreach ($recommended_majors as $recommended_major) {
            MajorRecommendation::create([
                'major_id' => Major::where('major', '=', $recommended_major)->get()->first()->id,
                'recommendation_id' => $recommendation->id,
            ]);
        }

        return redirect('calculating')->with('recommendation_id', $recommendation->id);;
    }

    public function showCalculatingPage()
    {
        return view('Recommendation.calculating');
    }
}
