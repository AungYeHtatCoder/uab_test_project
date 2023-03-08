@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Product Detail Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Product Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Product Detail
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td>{{ $product->id }}</td>
      </tr>
      <tr>
       <th>Product Name</th>
       <td>{{ $product->product_name }}</td>
      </tr>
      <tr>
       <th>Category</th>
       <td>{{ $product->category->category_name }}</td>
      </tr>
      <tr>
      <tr>
       <th>Brand </th>
       <td>{{ $product->brand->brand_name }}</td>
      </tr>
      <tr>
       <th>Product Price</th>
       <td>{{ $product->product_price }}</td>
      </tr>
      <tr>
       <th>Product Old Price</th>
       <td>{{ $product->product_old_price }}</td>
      </tr>
      <tr>
       <th>Product Quantity</th>
       <td>{{ $product->product_quantity }}</td>
      </tr>
      <tr>
       <th>Product Description</th>
       <td>{{ $product->product_description }}</td>
      </tr>
      <tr>
       <th>Product Image</th>
       <td>
        <img src="{{ asset('product_image') }}/{{ $product->product_image }}" alt="" width="200">
       </td>
      </tr>
      <tr>
       <th>Created At</th>
       <td>
        <!-- created at with date formate -->
        {{ $product->created_at->format('d-m-Y') }}
       </td>
      </tr>
      <tr>
       <th>Updated At</th>
       <td>
        <!-- updated at with date formate -->
        {{ $product->updated_at->format('d-m-Y') }}
       </td>
      </tr>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection