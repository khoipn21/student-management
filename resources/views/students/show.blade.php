@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Student Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->email }}</h6>
                <p class="card-text">Age: {{ $student->age }}</p>
                <a href="{{ route('students.index') }}" class="card-link">Back to list</a>
            </div>
        </div>
    </div>
@endsection
