@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Permission Update Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Permission Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Permission Update
    </div>
    <div class="card-body">
     <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
       <label for="title">Permission Name</label>
       <input type="text" class="form-control" name="title" id="title" value="{{ $permission->title }}">
      </div>
      <div class="mb-3 mt-4">
       <button type="submit" class="btn btn-primary">Permission Update</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection