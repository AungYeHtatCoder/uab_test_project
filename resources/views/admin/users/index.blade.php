@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<h1 class="mt-4">User Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">User Dashboard</li>
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
  User List <span><a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create New
    User</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Role Name</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($users as $user)
    <tr>
     <td>{{ $user->id }}</td>
     <td>{{ $user->name }}</td>
     <td>{{ $user->email }}</td>
     <td>
      @foreach ($user->roles as $role)
      <span class="btn btn-info">{{ $role->title }}</span>
      @endforeach
     </td>
     <td>
      <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
      <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success">Show</a>
      <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Delete</button>
      </form>
     </td>
    </tr>
    @endforeach
   <tfoot>
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Role Name</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection