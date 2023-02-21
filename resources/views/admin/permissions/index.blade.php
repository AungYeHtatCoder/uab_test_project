@extends('layouts.admin_app')

@section('content')
<h1 class="mt-4">Permission Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Permission Dashboard</li>
</ol>

<!-- session alert  -->
@if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif


<div class="card mb-4">
 <div class="card-header">
  <i class="fas fa-table me-1"></i>
  Permission List <span><a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">Create New
    Permission</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>Permission Name</th>
     <th>Create At</th>
     <th>Updated At</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     @foreach ($permissions as $permission)
     <td>{{ $permission->id }}</td>
     <td>{{ $permission->title }}</td>
     <td>
      <!-- created at with date format with month name -->
      {{ $permission->created_at->format('d M Y') }}
     </td>
     <td>
      <!-- updated at with date format with month name -->
      {{ $permission->updated_at->format('d M Y') }}
     </td>
     <td>
      <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-primary">Edit</a>

      <a href="{{ route('admin.permissions.show', $permission->id) }}" class="btn btn-warning">Show</a>

      <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </tr>
    @endforeach
   </tbody>
   <tfoot>
    <tr>
     <th>ID</th>
     <th>Permission Name</th>
     <th>Create At</th>
     <th>Updated At</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection