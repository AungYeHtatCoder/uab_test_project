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
  <table id="datatablesSimple">
   <thead>
    <tr>
     <th>OrderNo</th>
     <th>OrderDate</th>
     <th>OrderTime</th>
     <th>TotalPrice</th>
     <th>OrderStatus</th>
     <th>Action</th>
    </tr>
   </thead>
   <tfoot>
    <tr>
     <th>OrderNo</th>
     <th>OrderDate</th>
     <th>OrderTime</th>
     <th>TotalPrice</th>
     <th>OrderStatus</th>
     <th>Action</th>
    </tr>
   </tfoot>
   <tbody>
    @foreach ($orders as $order)
    <tr>
     <td>{{ $order->order_number }}</td>
     <td>{{ date('jS M, Y', strtotime($order->order_date)) }}</td>
     <td>
      {{ date('h:i A', strtotime($order->order_time)) }}
     </td>
     <td>{{ $order->total_price }}</td>
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
     <td>
      <a href="{{ route('admin.order.show', $order->id) }}" class="btn btn-primary">View</a>
      <form action="{{ route('admin.order.destroy', $order->id) }}" method="POST" class="d-inline">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Delete</button>
      </form>
     </td>
    </tr>
    @endforeach

   </tbody>
  </table>
 </div>
</div>
@endsection