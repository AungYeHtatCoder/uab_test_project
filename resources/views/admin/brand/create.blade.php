@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Brand Create Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Brand Dashboard</li>
</ol>

<div class="card mb-4">
 <div class="card-header">
  <i class="fas fa-table me-1"></i>
  Brand Create
 </div>
 <div class="card-body">
  <form action="{{ route('admin.brands.store') }}" method="POST">
   @csrf
   <div class="form-group">
    <label for="title">Brand Name</label>
    <input type="text" class="form-control" name="brand_name" id="title" placeholder="Enter Brand Name">
   </div>
   <button type="submit" class="btn btn-primary">Create Brand</button>
  </form>
 </div>
</div>

@endsection