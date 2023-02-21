@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<h1 class="mt-4">Role Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Role Dashboard</li>
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
  Role List <span><a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Create New
    Role</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>Role Name</th>
     <th>Permisson Name</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     @foreach ($roles as $role)
     <td>{{ $role->id }}</td>
     <td>{{ $role->title }}</td>
     <td>
      @foreach ($role->permissions as $permission)
      <span class="btn btn-primary btn-sm bbadge text-bg-primary">{{ $permission->title }}</span>
      @endforeach
     </td>
     <td>
      <a href="{{ route('admin.roles.show', $role->id) }}" class="btn btn-primary">Show</a>
      <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-success">Edit</a>
      <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" class="d-inline">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Delete</button>
      </form>
     </td>
    </tr>
    @endforeach
   </tbody>
   <tfoot>
    <tr>
     <th>ID</th>
     <th>Role Name</th>
     <th>Permisson Name</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection