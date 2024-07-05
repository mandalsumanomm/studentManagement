@extends('layout')

@section('content')
<div class="container">
  <h2>Student Details</h2>
  <div class="card">
    <div class="card-header">
      {{ $student->name }}
    </div>
    <div class="card-body">
      <p><strong>Name:</strong> {{ $student->name }}</p>
      <p><strong>Address:</strong> {{ $student->address }}</p>
      <p><strong>Mobile:</strong> {{ $student->mobile }}</p>
      <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
      </form>
      <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
@endsection
