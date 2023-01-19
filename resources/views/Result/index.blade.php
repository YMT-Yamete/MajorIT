@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <h3 class="my-5 text-center">You should major in "Knowledge Engineering"</h3>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at
                        incidunt libero nemo
                        maxime qui eum, dolor aliquam accusamus impedit sapiente illum? Blanditiis consequatur eaque
                        enim cum iste mollitia provident voluptate quis iure nemo in consectetur, assumenda
                        perferendis, nam itaque dolores obcaecati molestiae reprehenderit ipsum qui culpa earum!
                        Temporibus, esse.</p>
                    <hr>
                    <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Rate this result
                    </button>
                    <a type="button" class="btn" href="{{ url('/') }}">
                        Back to Home Page
                    </a>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGJsYWNrJTIwYW5kJTIwd2hpdGUlMjB0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                        class="resultImg shadow-lg">
                    <h4 class="mt-4">Knowledge Engineering</h4>
                </div>
            </div>
        </div>
        <div class="starHr">
            <span class="star">
                ✢
            </span>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text" class="mx-2">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text" class="mx-2">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text" class="mx-2">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text" class="mx-2">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text" class="mx-2">1 star</label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h5 class="text-center">Feedback</h5>
                        <textarea class="form-control" rows="5" placeholder="Please write feedback here."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
