<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function viewUser($id)
    {
        if (Auth()->user()->id == $id) {
            $recommendations = Recommendation::where('user_id', $id)->orderBy('id', 'DESC')->get();
            return view('User.index', compact('recommendations'));
        }
    }

    function editUser($id)
    {
        if (Auth()->user()->id == $id) {
            return view('User.edit');
        }
    }
}
