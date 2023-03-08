@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Category Update Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Category Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Category Update
    </div>
    <div class="card-body">
     <form action="{{ route('admin.categories.update', $category_edit->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
       <label for="title">Category Name</label>
       <input type="text" class="form-control" name="category_name" id="title"
        value="{{ $category_edit->category_name }}">
      </div>
      <div class="mb-3 mt-4">
       <button type="submit" class="btn btn-primary">Category Update</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection