@extends('layouts.admin_app')

@section('content')

<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="card mb-4">
 <div class="card-header">
  <i class="fas fa-table me-1"></i>
  DataTable Example
 </div>
 <div class="card-body">
  <table class="table">
   <tr>
    <th>OrderNo</th>
    <td>{{ $order->order_number }}</td>
   </tr>
   <tr>
    <th>OrderDate</th>
    <td>{{ date('jS M, Y', strtotime($order->order_date)) }}</td>

   </tr>
   <tr>
    <th>OrderTime</th>
    <td>{{ date('h:i A', strtotime($order->order_time)) }}</td>
   </tr>
   <tr>
    <th>TotalPrice</th>
    <td>{{ $order->total_price }}</td>
   </tr>
   <tr>
    <th>OrderStatus</th>
    <td>
     @if ($order->order_status == 'pending')
     <span class="badge bg-warning text-dark">{{ $order->order_status }}</span>
     <form action="{{ route('admin.order.update', $order->id) }}" method="POST" class="d-inline">
      @csrf
      @method('PUT')
      <input type="hidden" name="order_status" value="confirmed">
      <button type="submit" class="btn btn-success btn-sm">Confirm</button>
     </form>
     @else
     <span class="badge bg-primary text-white">{{ $order->order_status }}</span>
     @endif
    </td>
   </tr>
   <tr>
    <th>Customer Name</th>
    <td>
     <!-- user_id == order id  -->
     {{ $order->user->name }}
    </td>

   </tr>
   <tr>
    <th>Customer Phone</th>
    <td>
     {{ $order->user->phone }}
    </td>
   </tr>
   <tr>
    <th>Customer Email</th>
    <td>
     {{ $order->user->email }}
    </td>
   </tr>
   <tr>
    <th>Customer Address</th>
    <td>
     {{ $order->user->contact_address }}
    </td>
   </tr>
   <tr>
    <th>Permenent Address</th>
    <td>
     {{ $order->user->permenent_address }}
    </td>
   </tr>
   <tr>
    <th>business_address</th>
    <td>
     {{ $order->user->business_address }}
    </td>
   </tr>
   <tr>
    <th>Customer Image</th>
    <td>
     <img src="{{ asset('uploads/user_images') }}/{{ $order->user->profile }}" alt="" width="100px">
    </td>
   </tr>
   <tr>
    <th>Gender</th>
    <td>{{$order->user->gender}}</td>
   </tr>
   <tr>
    <th>DOB</th>
    <td>{{$order->user->dob}}</td>
   </tr>
   <tr>
    <th>Education</th>
    <td>{{$order->user->education}}</td>
   </tr>
   <tr>
    <th>Occupation</th>
    <td>{{$order->user->occupation}}</td>
   </tr>
   <tr>
    <th>Religion</th>
    <td>{{$order->user->religion}}</td>
   </tr>
   <tr>
    <th>Country</th>
    <td>{{$order->user->country}}</td>
   </tr>
   <tr>
    <th>State</th>
    <td>{{$order->user->state}}</td>
   </tr>
   <tr>
    <th>City</th>
    <td>{{$order->user->city}}</td>
   </tr>
   <tr>
    <th>Zip</th>
    <td>{{$order->user->zip_code}}</td>
   </tr>
   <tr>
    <th>PaymentMethod</th>
    <td>{{$order->paymentmethod}}</td>
   </tr>
   <tr>
    <th>CardName</th>
    <td>{{$order->card_name}}</td>
   </tr>
   <tr>
    <th>ExpDate</th>
    <td>{{$order->exp_date}}</td>
   </tr>
   <tr>
    <th>CardNo</th>
    <td>{{$order->card_no}}</td>
   </tr>
   <tr>
    <th>CVV</th>
    <td>{{$order->cvv_no}}</td>
   </tr>
   <tr>
    <th>nrc_type</th>
    <td>{{$order->nrc_type}}</td>
   </tr>
   <tr>
    <th>Product_name</th>
    @foreach ($order->products as $item)
    <td>{{$item->product_name}}</td>
    <td>Product Quantity : {{ $item->product_quantity }}</td>
    <td>Product Price : {{$item->product_price }}</td>
    <td>Product Image : <img src="{{ $item->product_image }}" alt="" width="100px" height="100px"> </td>
    @endforeach
   </tr>
   <tr>
    <th>Back To Order</th>
    <td><a href="{{ route('admin.order.index') }}" class="btn btn-primary">Back</a></td>
   </tr>

  </table>
 </div>
</div>
@endsection