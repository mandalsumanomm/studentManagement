@extends('layout')

@section('content')
<div class="container">
  <h2>Teacher Details</h2>
  <div class="card">
    <div class="card-header">
      {{ $teacher->name }}
    </div>
    <div class="card-body">
      <p><strong>Name:</strong> {{ $teacher->name }}</p>
      <p><strong>Address:</strong> {{ $teacher->address }}</p>
      <p><strong>Mobile:</strong> {{ $teacher->mobile }}</p>
      <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
      </form>
      <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
@endsection
