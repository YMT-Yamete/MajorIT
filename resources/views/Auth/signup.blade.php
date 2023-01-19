@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="authDiv d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="my-3 authCard">
                <a class="btn btn-dark" href="{{ url('/') }}">Back</a>
            </div>
            <div class="card authCard shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-center mb-5">✢ Sign Up ✢</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Age</label>
                                    <input type="password" class="form-control" placeholder="Age">
                                </div>
                                <div class="col d-flex flex-column">
                                    <label class="form-label">Male</label>
                                    <div class="d-flex align-items-center genderRadioDiv">
                                        <input type="radio" class="genderRadio" name="gender">
                                    </div>
                                </div>
                                <div class="col d-flex flex-column">
                                    <label class="form-label">Female</label>
                                    <div class="d-flex align-items-center genderRadioDiv">
                                        <input type="radio" class="genderRadio" name="gender">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Sign up</button>
                            <div class="my-3">
                                <a href="{{ url('/signin') }}">Already have an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
