@extends('layout')

@section('content')
<div class="container">
  <h2>Teacher Application</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <div class="mb-3">
    <a href="{{ route('teachers.create') }}" class="btn btn-success">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teachers as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->mobile }}</td>
        <td>
          <a href="{{ route('teachers.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
          <a href="{{ route('teachers.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
          <form action="{{ route('teachers.destroy', $item->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
