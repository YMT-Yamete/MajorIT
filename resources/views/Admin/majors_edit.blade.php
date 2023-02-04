@extends('Layout.layout')

@section('content')
    <div class="container">
        <div class="container my-4 text-center">
            <div>
                <a href="{{ url('admin/') }}" class="btn btn-outline-dark m-3">Dashboard</a>
                <a href="{{ url('admin/users') }}" class="btn btn-outline-dark m-3">Users</a>
                <a href="{{ url('admin/majors') }}" class="btn btn-dark m-3">Majors</a>
                <a href="{{ url('admin/quizzes') }}" class="btn btn-outline-dark m-3">Quizzes</a>
                <a href="{{ url('admin/recommendations') }}" class="btn btn-outline-dark m-3">Recommendations</a>
            </div>
        </div>
        <div class="container">
            <form method="POST" action="{{ url('admin/majors/'. $major->id .'/update') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Major Name</label>
                    <input type="text" class="form-control" placeholder="Type new major name" name="major" value="{{ $major->major }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="5" class="form-control" placeholder="Type description" required>{{ $major->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Catalogue Description</label>
                    <textarea name="catalogueDescription" rows="5" class="form-control" placeholder="Type catelogue description" required>{{ $major->catalogueDescription }}</textarea>
                </div>
                <button type="submit" class="btn btn-dark" style="width: 100%;">Save</button>
                <div class="text-center my-3">
                    <a href="{{ url('admin/majors') }}">Go Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
