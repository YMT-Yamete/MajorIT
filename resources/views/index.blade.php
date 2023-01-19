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
                    <h1 class="my-3 ">Lorem ipsum dolor sit amet consectetur.</h1>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at
                        incidunt libero nemo
                        maxime qui eum, dolor aliquam accusamus impedit sapiente illum? Blanditiis consequatur eaque
                        enim cum iste mollitia provident voluptate quis iure nemo in consectetur, assumenda
                        perferendis, nam itaque dolores obcaecati molestiae reprehenderit ipsum qui culpa earum!
                        Temporibus, esse.</p>
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
