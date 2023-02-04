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
                <a href="{{ url('admin/quizzes') }}" class="btn btn-dark m-3">Quizzes</a>
                <a href="{{ url('admin/recommendations') }}" class="btn btn-outline-dark m-3">Recommendations</a>
            </div>
        </div>
        @if (session()->has('msg'))
            <div class="alert {{ session()->get('alertClass') }} alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        {{-- add new major --}}
        <div class="my-3 text-end">
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#addNewQuiz"
                aria-controls="addNewQuiz">Add New Quiz + </button>
        </div>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="addNewQuiz"
            aria-labelledby="addNewQuizLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="addNewQuizLabel">Add New Quiz</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="{{ url('admin/quizzes/add') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Quiz</label>
                        <input type="text" class="form-control" placeholder="Type new quiz" name="quiz" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Relating Major</label>
                        <select class="form-select" name="major_id" required>
                            <option selected disabled value="unselected">Select Major</option>
                            @foreach ($majors as $major)
                                <option value={{ $major->id }}>{{ $major->major }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark" style="width: 100%;">Add</button>
                </form>
            </div>
        </div>
        {{-- display data with table --}}
        <div>
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Quiz</th>
                    <th>Relating Major</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <td>{{ $quiz->id }}</td>
                            <td>{{ $quiz->quiz }}</td>
                            <td>{{ $quiz->major->major }}</td>
                            <form action="{{ url('/quizzes/' . $quiz->id . '/delete') }}" method="POST">
                                @csrf
                                <td width="15%">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </form>
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
