<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function viewUser($id) {
        return view('User.index');
    }

    function editUser($id) {
        return view('User.edit');
    }
}
