@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<h1 class="mt-4">Category Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Category Dashboard</li>
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
  Category List <span><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Create New
    Category</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>Category Name</th>
     <th>Created_at</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($categories as $category)
    <tr>
     <td>{{ $category->id }}</td>
     <td>{{ $category->category_name }}</td>
     <td>
      <!-- created_at with date format -->
      {{ $category->created_at->format('d-m-Y') }}
     </td>
     <td>
      <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-primary">Show</a>
      <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
      <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline">
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
     <th>Category Name</th>
     <th>Crated_At</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection