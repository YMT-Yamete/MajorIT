@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="authDiv d-flex flex-column justify-content-center align-items-center">
            <div class="my-3 authCard">
                <a class="btn btn-dark" href="{{ url('/') }}">Back</a>
            </div>
            @if (session()->has('msg'))
                <div class="alert {{ session()->get('alertClass') }} alert-dismissible fade show authCard" role="alert">
                    {{ session()->get('msg') }}
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card authCard shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-center mb-5">✢ Sign In ✢</h5>
                    <form method="POST" action={{ url('/signin') }}>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password" name="password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
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
