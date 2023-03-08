@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<h1 class="mt-4">Brand Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Brand Dashboard</li>
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
  Brand List <span><a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Create New
    Brand</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>Brand Name</th>
     <th>Crated_At</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($brands as $brand)
    <tr>
     <td>{{ $brand->id }}</td>
     <td>{{ $brand->brand_name }}</td>
     <td>{{ $brand->created_at }}</td>
     <td>
      <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST">
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
     <th>Brand Name</th>
     <th>Crated_At</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection