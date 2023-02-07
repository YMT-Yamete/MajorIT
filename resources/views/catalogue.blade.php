@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="container py-5">
            <div class="mb-3">
                <h1 class="text-center">Catalogue</h1>
            </div>
            <div class="starHr my-5">
                <span class="star">
                    ✢
                </span>
            </div>
            <div class="accordion accordion-flush">
                @foreach ($majors as $major)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#{{ $major->id }}">
                                {{ $major->major }}
                            </button>
                        </h2>
                        <div id="{{ $major->id }}" class="accordion-collapse collapse">
                            <div class="accordion-body">{{ $major->catalogueDescription }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="starHr">
            <span class="star">
                ✢
            </span>
        </div>
    </div>
@endsection
