<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Quiz;
use App\Models\Rating;
use App\Models\Recommendation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $recommendations = Recommendation::all();
        $ratings = Rating::all();
        $averageRating = round(Rating::avg('rate'));

        // For major recommendation chart
        $majors = Major::all();
        $majorArray = array();
        foreach ($majors as $major) {
            $majorArray[] = array(
                "label" => $major->major,
                "y" => Recommendation::where('major_id', $major->id)->get()->count()
            );
        }
        $majorData = $majorArray;

        // For rating chart
        $ratingData = array(
            array("label" => "1 star rating", "y" => Rating::where('rate', 1)->get()->count()),
            array("label" => "2 stars rating", "y" => Rating::where('rate', 2)->get()->count()),
            array("label" => "3 stars rating", "y" => Rating::where('rate', 3)->get()->count()),
            array("label" => "4 stars rating", "y" => Rating::where('rate', 4)->get()->count()),
            array("label" => "5 stars rating", "y" => Rating::where('rate', 5)->get()->count()),
        );

        // return view
        return view('Admin.index', compact('users', 'recommendations', 'ratings', 'averageRating', 'majorData', 'ratingData'));
    }

    public function showUsersList()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function showMajorsList()
    {
        $majors = Major::all();
        return view('admin.majors', compact('majors'));
    }

    public function showQuizzesList()
    {
        $quizzes = Quiz::all();
        return view('admin.quizzes', compact('quizzes'));
    }

    public function showRecommendationsList()
    {
        return view('admin.recommendations');
    }
}
