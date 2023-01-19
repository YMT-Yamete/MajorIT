<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $dataPoints = array(
            array("label"=> "Software Engineering", "y"=> 290),
            array("label"=> "Knowledge Engineering", "y"=> 261),
            array("label"=> "Business Information System", "y"=> 158),
            array("label"=> "High Performance Computing", "y"=> 72),
            array("label"=> "Computer Network", "y"=> 191),
            array("label"=> "Embedded System", "y"=> 126)
        );
        return view('Admin.index', compact('dataPoints'));
    }
}
