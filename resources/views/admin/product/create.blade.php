@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Product Create Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Product Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-md-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Product Create
    </div>
    <div class="card-body">
     <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Name</label>
       <input type="text" class="form-control" name="product_name" id="title" placeholder="Enter Product Name">
      </div>
      <div class="form-group mb-3 mt-5">
       <!-- categories select option -->
       <select name="category_id" class="form-select" id="">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
       </select>
      </div>


      <div class="form-group mb-3 mt-5">
       <!-- brand select option -->
       <select name="brand_id" class="form-select" id="">
        <option value="">Select Brand</option>
        @foreach ($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
        @endforeach
       </select>
      </div>

      <!-- price -->
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Price</label>
       <input type="text" class="form-control" name="product_price" id="title" placeholder="Enter Product Price">
      </div>
      <!-- old price -->
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Old Price</label>
       <input type="text" class="form-control" name="product_old_price" id="title"
        placeholder="Enter Product Old Price">
      </div>
      <!-- product_quantity -->
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Quantity</label>
       <input type="text" class="form-control" name="product_quantity" id="title" placeholder="Enter Product Quantity">
      </div>

      <!-- product_description with textarea -->
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Description</label>
       <textarea name="product_description" class="form-control" id="" cols="30" rows="10"></textarea>
      </div>

      <!-- product_image -->
      <div class="form-group mb-3 mt-5">
       <label for="title">Product Image</label>
       <input type="file" class="form-control" name="product_image" id="title" placeholder="Enter Product Image">
      </div>
      <div class="form-group mb-3 mt-5">
       <button type="submit" class="btn btn-primary">Create Product</button>

      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection