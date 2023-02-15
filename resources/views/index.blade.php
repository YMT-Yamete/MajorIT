@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center p-3">
                    <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGJsYWNrJTIwYW5kJTIwd2hpdGUlMjB0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                        class="introImg shadow-lg">
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="my-3 ">Major Recommendation System for UIT</h1>
                    <p class="mainDescription">Explore the best IT major for you with our Major Recommendation System, MajorIT. Our platform utilizes a point-based system to recommend programs that match your personal preferences. Discover your options and make an informed decision about your academic future today!</p>
                    <div>
                        <a class="btn btn-dark py-3 " href="{{ url('/quizzes') }}">Start Test Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="starHr">
            <span class="star">
                ✢
            </span>
        </div>
    </div>
@endsection
