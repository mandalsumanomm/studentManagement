@extends('layout')

@section('content')
<div class="container">
  <h2>Edit Teacher</h2>
  <div class="card">
    <div class="card-header">
      Edit {{ $teacher->name }}
    </div>
    <div class="card-body">
      <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="{{ $teacher->address }}" required>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile</label>
          <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $teacher->mobile }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection
