@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Category Create Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Category Dashboard</li>
</ol>

<div class="card mb-4">
 <div class="card-header">
  <i class="fas fa-table me-1"></i>
  Category Create
 </div>
 <div class="card-body">
  <form action="{{ route('admin.categories.store') }}" method="POST">
   @csrf
   <div class="form-group">
    <label for="title">Category Name</label>
    <input type="text" class="form-control" name="category_name" id="title" placeholder="Enter Category Name">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
</div>

@endsection