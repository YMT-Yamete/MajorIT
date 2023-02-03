@extends('Layout.layout')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

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
        <div>
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Major</th>
                    <th>Description</th>
                    <th width="15%">Action</th>
                </thead>
                <tbody>
                    @foreach ($majors as $major)
                        <tr>
                            <td>{{ $major->id }}</td>
                            <td>{{ $major->major }}</td>
                            <td>{{ $major->description }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm m-2">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="starHr">
            <span class="star">
                ✢
            </span>
        </div>
    </div>
@endsection
