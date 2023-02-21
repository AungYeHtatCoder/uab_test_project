@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Permission Create Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Permission Dashboard</li>
</ol>

<div class="card mb-4">
 <div class="card-header">
  <i class="fas fa-table me-1"></i>
  Permission Create
 </div>
 <div class="card-body">
  <form action="{{ route('admin.permissions.store') }}" method="POST">
   @csrf
   <div class="form-group">
    <label for="title">Permission Name</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Permission Name">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
</div>

@endsection