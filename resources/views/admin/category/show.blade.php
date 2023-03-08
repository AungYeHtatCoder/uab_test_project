@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Category Detail Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Category Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Category Detail
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td>{{ $category->id }}</td>
      </tr>
      <tr>
       <th>Title</th>
       <td>{{ $category->category_name }}</td>
      </tr>
      <tr>
       <th>Created At</th>
       <td>
        <!-- created at with date formate -->
        {{ $category->created_at->format('d-m-Y') }}
       </td>
      </tr>
      <tr>
       <th>Updated At</th>
       <td>
        <!-- updated at with date formate -->
        {{ $category->updated_at->format('d-m-Y') }}
       </td>
      </tr>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection