@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="authDiv d-flex flex-column justify-content-center align-items-center">
            <div class="my-3 authCard">
                <a class="btn btn-dark" href="{{ url('/') }}">Back</a>
            </div>
            <div class="card authCard shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-center mb-5">✢ Sign In ✢</h5>
                    <form method="POST" action={{ url('/signin') }}>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Sign in</button>
                            <div class="my-3">
                                <a href="{{ url('/signup') }}">I don't have an account.</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
