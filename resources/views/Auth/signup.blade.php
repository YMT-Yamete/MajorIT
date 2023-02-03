@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="authDiv d-flex flex-column justify-content-center align-items-center mt-5">
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
                    <h5 class="card-title text-center mb-5">✢ Sign Up ✢</h5>
                    <form method="POST" action="{{ url('/signup') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
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
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Age</label>
                                    <input type="number" class="form-control @error('age') is-invalid @enderror"
                                        placeholder="Age" name="age" value="{{ old('age') }}">
                                    @error('age')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col d-flex">
                                    <table width="100%">
                                        <tr>
                                            <td>Male</td>
                                            <td>Female</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center genderRadioDiv">
                                                    <input type="radio" class="genderRadio" name="gender" value="Male"
                                                        {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center genderRadioDiv">
                                                    <input type="radio" class="genderRadio" name="gender" value="Female"
                                                        {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                @if ($errors->has('gender'))
                                                    <div class="text-danger genderError ms-1">
                                                        {{ $errors->first('gender') }}</div>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
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
