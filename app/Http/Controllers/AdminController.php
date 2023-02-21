<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\MajorRecommendation;
use App\Models\Quiz;
use App\Models\Rating;
use App\Models\Recommendation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Index

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
                "y" => MajorRecommendation::where('major_id', $major->id)->get()->count()
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

    // Users

    public function showUsersList()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }


    // Major 

    public function showMajorsList()
    {
        $majors = Major::all();
        return view('admin.majors', compact('majors'));
    }

    public function addNewMajor(Request $request)
    {
        Major::create([
            'major' => $request->major,
            'description' => $request->description,
            'catalogueDescription' => $request->catalogueDescription,
        ]);
        session()->flash('alertClass', 'btn-success');
        return back()->with('msg', 'New major has been added successfully');
    }

    public function deleteMajor($id)
    {
        if (Quiz::where('major_id', $id)->get()->count() > 0) {
            session()->flash('alertClass', 'btn-danger');
            return back()->with('msg', 'You cannot delete a major when there is a relating quiz');
        } else {
            Major::find($id)->delete();
            session()->flash('alertClass', 'btn-danger');
            return back()->with('msg', 'A major has been deleted successfully');
        }
    }

    public function editMajor($id)
    {
        $major = Major::find($id);
        return view('Admin.majors_edit', compact('major'));
    }

    public function updateMajor(Request $request, $id)
    {
        $major = Major::find($id);
        $major->update([
            'major' => $request->major,
            'description' => $request->description,
            'catalogueDescription' => $request->catalogueDescription,
        ]);
        session()->flash('alertClass', 'btn-success');
        return redirect('admin/majors')->with('msg', 'A major has been updated successfully');
    }

    // Quiz

    public function showQuizzesList()
    {
        $quizzes = Quiz::all();
        $majors = Major::all();
        return view('admin.quizzes', compact('quizzes', 'majors'));
    }

    public function addNewQuiz(Request $request)
    {
        if (!isset($request->major_id)) {
            session()->flash('alertClass', 'btn-warning');
            return back()->with('msg', 'You need to select relating major');
        } else {
            Quiz::create([
                'quiz' => $request->quiz,
                'major_id' => $request->major_id,
            ]);
            session()->flash('alertClass', 'btn-success');
            return back()->with('msg', 'New quiz has been added successfully');
        }
    }

    public function deleteQuiz($id)
    {   
        Quiz::find($id)->delete();
        session()->flash('alertClass', 'btn-danger');
        return back()->with('msg', 'A quiz has been deleted successfully');
    }

    // Recommendation

    public function showRecommendationsList()
    {
        $recommendations = Recommendation::all();
        return view('admin.recommendations', compact('recommendations'));
    }
}
