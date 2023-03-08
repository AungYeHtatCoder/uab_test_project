@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<h1 class="mt-4">Product Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Product Dashboard</li>
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
  Product List <span><a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create New
    Product</a></span>
 </div>
 <div class="card-body">
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>ID</th>
     <th>ProductName</th>
     <th>Category</th>
     <th>Brand</th>
     <th>ProductImg</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($products as $product)
    <tr>
     <td>{{ $product->id }}</td>
     <td>{{ $product->product_name }}</td>
     <td>{{ $product->category->category_name }}</td>
     <td>{{ $product->brand->brand_name }}</td>
     <td>
      <!-- display product_image  -->
      <img src="{{ asset('product_image/'.$product->product_image) }}" alt="{{ $product->product_name }}"
       class="img-fluid" width="100px" height="100px">

     </td>
     <td>
      <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
      <!-- <a href="{{ route('admin.products.destroy', $product->id) }}" class="btn btn-danger">Delete</a> -->
      <!-- detail -->
      <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
      <!-- delete form -->
      <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger btn-sm">Delete</button>
     </td>
    </tr>
    @endforeach
   </tbody>
   <tfoot>
    <tr>
     <th>ID</th>
     <th>ProductName</th>
     <th>Category</th>
     <th>Brand</th>
     <th>ProductImg</th>
     <th>Action</th>
    </tr>
   </tfoot>

  </table>
 </div>
</div>
@endsection