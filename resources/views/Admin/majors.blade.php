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
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#addNewMajor"
                aria-controls="addNewMajor">Add New Major + </button>
        </div>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="addNewMajor" aria-labelledby="addNewMajorLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="addNewMajorLabel">Add New Major</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="{{ url('admin/majors/add') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Major Name</label>
                        <input type="text" class="form-control" placeholder="Type new major name" name="major" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="5" class="form-control" placeholder="Type description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Catalogue Description</label>
                        <textarea name="catalogueDescription" rows="5" class="form-control" placeholder="Type catelogue description" required></textarea>
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
                    <th>Major</th>
                    <th>Description</th>
                    <th>Catalogue Description</th>
                    <th width="15%">Action</th>
                </thead>
                <tbody>
                    @foreach ($majors as $major)
                        <tr>
                            <td>{{ $major->id }}</td>
                            <td>{{ $major->major }}</td>
                            <td>{{ $major->description }}</td>
                            <td>{{ $major->catalogueDescription }}</td>
                            <form action="{{ url('admin/majors/' . $major->id . '/delete') }}" method="POST">
                                @csrf
                                <td>
                                    <a href="{{ url('admin/majors/'. $major->id .'/edit') }}" class="btn btn-warning btn-sm m-2">Edit</a>
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
