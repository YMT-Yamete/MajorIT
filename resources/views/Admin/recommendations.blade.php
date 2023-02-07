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
                <a href="{{ url('admin/majors') }}" class="btn btn-outline-dark m-3">Majors</a>
                <a href="{{ url('admin/quizzes') }}" class="btn btn-outline-dark m-3">Quizzes</a>
                <a href="{{ url('admin/recommendations') }}" class="btn btn-dark m-3">Recommendations</a>
            </div>
        </div>
        <div>
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>UserID</th>
                    <th>Recommended Major</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    @foreach ($recommendations as $recommendation)
                    <tr>
                        <td>{{ $recommendation->id }}</td>
                        <td>{{ $recommendation->user_id }}</td>
                        <td>{{ $recommendation->major->major }}</td>
                        <td>{{ $recommendation->rating->rate }} stars</td>
                        <td>{{ ($recommendation->rating->feedback == '') ? '-' : $recommendation->rating->feedback }}</td>
                        <td>{{ $recommendation->date }}</td>
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
