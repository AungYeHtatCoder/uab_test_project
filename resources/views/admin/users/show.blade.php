@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">User Detail Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">User Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-12">

   <div class="card-header">
    <i class="fas fa-table me-1"></i>
    User Detail
   </div>
   <div class="card-body">
    <table class="table">
     <tr>
      <th>ID</th>
      <td>{{ $user_detail->id }}</td>
     </tr>
     <tr>
      <th>Name</th>
      <td>{{ $user_detail->name }}</td>
     </tr>
     <tr>
      <th>Email</th>
      <td>{{ $user_detail->email }}</td>

     </tr>
     <tr>
      <th>Gender</th>
      <td>{{ $user_detail->gender }}</td>
     </tr>

     <tr>
      <th>User Type</th>
      <td>{{ $user_detail->type }}</td>
     </tr>
     <tr>
      <th>NRC NO</th>
      <td>{{ $user_detail->nrc_type }}</td>
     </tr>
     <tr>
      <th>Phone</th>
      <td>{{ $user_detail->phone }}</td>
     </tr>
     <tr>
      <th>Secondary phone</th>
      <td>{{ $user_detail->other_phone }}</td>
     </tr>
     <tr>
      <th>Father Name</th>
      <td>{{ $user_detail->address }}</td>
     </tr>
     <tr>
      <th>Date of birth</th>
      <!-- date of birth with date format -->
      <td>{{ $user_detail->dob }}</td>
     </tr>
     <tr>
      <th>Education</th>
      <td>{{ $user_detail->education }}</td>
     </tr>
     <tr>
      <th>Occupation</th>
      <td>{{ $user_detail->occupation }}</td>
     </tr>
     <tr>
      <th>Religioin</th>
      <td>{{ $user_detail->religion }}</td>
     </tr>
     <tr>
      <th>Country</th>
      <td>{{ $user_detail->country }}</td>
     </tr>
     <tr>
      <th>City</th>
      <td>{{ $user_detail->city }}</td>
     </tr>
     <tr>
      <th>State</th>
      <td>{{ $user_detail->state }}</td>
     </tr>
     <tr>
      <th>Zip Code</th>
      <td>{{ $user_detail->zip_code }}</td>
     </tr>
     <tr>
      <th>Contact Address</th>
      <td>{{ $user_detail->contact_address }}</td>
     </tr>
     <tr>
      <th>Permanent Address</th>
      <td>{{ $user_detail->permanent_address }}</td>
     </tr>
     <tr>
      <th>Business Address</th>
      <td>{{ $user_detail->business_address }}</td>
     </tr>
     <tr>
      <th>Status</th>
      <td>{{ $user_detail->status }}</td>
     </tr>
     <tr>
      <th>Remark</th>
      <td>{{ $user_detail->remark }}</td>
     </tr>
     <tr>
      <th>Profile Image</th>
      <td>
       <!-- profile image -->
       <img src="{{ asset('uploads/users/'.$user_detail->profile_image) }}" alt="profile image" width="100px"
        height="100px">
      </td>
     </tr>
     <tr>
      <th>Role</th>
      <td>
       @foreach ($user_detail->roles as $role)
       <span class="btn btn-primary btn-sm bbadge text-bg-primary">{{ $role->title }}</span>
       @endforeach
      </td>
     </tr>
     <tr>
      <th>Created At</th>
      <td>
       <!-- created at with date formate -->
       {{ $user_detail->created_at->format('d-m-Y') }}
      </td>
     </tr>
     <tr>
      <th>Updated At</th>
      <td>
       <!-- updated at with date formate -->
       {{ $user_detail->updated_at->format('d-m-Y') }}
      </td>
     </tr>
    </table>
   </div>


   <!-- tab -->
   <ul class="nav nav-tabs">
    <li class="nav-item">
     <a class="nav-link active" aria-current="page" href="#" data-tab="home-tab">Address</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#" data-tab="profile-tab">Product</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#" data-tab="messages-tab">OrderCard</a>
    </li>

   </ul>

   <div class="card-deck">
    <div class="card" id="home-tab">
     <div class="card-body">
      <h5 class="card-title">Address Card</h5>
      <p class="card-text">This is the Address card.</p>
      <table class="table">
       <tr>
        <th>Contact Address</th>
        <td>{{ $user_detail->contact_address }}</td>
       </tr>
       <tr>
        <th>Permanent Address</th>
        <td>{{ $user_detail->permanent_address }}</td>
       </tr>
       <tr>
        <th>Business Address</th>
        <td>{{ $user_detail->business_address }}</td>
       </tr>
      </table>
     </div>
    </div>
    <div class="card" id="profile-tab">
     <div class="card-body">
      <h5 class="card-title">Product Card</h5>
      <p class="card-text">This is the profile card.</p>
     </div>
    </div>
    <div class="card" id="messages-tab">
     <div class="card-body">
      <h5 class="card-title">Order Card</h5>
      <p class="card-text">This is the Order card.</p>
      <table class="table">
       @foreach ($orders as $order)
       <tr>
        <th>Order Id</th>
        <td>{{ $order->id }}</td>
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
        <th>Order Status</th>
        <td>
         <!-- order_status with badge -->
         @if ($order->order_status == 'pending')
         <span class="badge bg-warning text-white">{{ $order->order_status }}</span>
         @else
         <span class="badge bg-success text-white">{{ $order->order_status }}</span>
         @endif

        </td>
       </tr>
       <tr>
        <th>Order Total Price </th>
        <td>{{ $order->total_price }}</td>
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

       @endforeach
      </table>
     </div>
    </div>
   </div>


   <!--tab end  -->

  </div>
 </div>
</div>

@endsection
@section('scripts')
<script>
// Get all the anchor tags with data-tab attribute
const tabLinks = document.querySelectorAll('[data-tab]');

// Loop through each anchor tag and add a click event listener
tabLinks.forEach(tabLink => {
 tabLink.addEventListener('click', e => {
  e.preventDefault();

  // Get the id of the tab content to display
  const tabId = tabLink.dataset.tab;

  // Hide all the card elements
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
   card.style.display = 'none';
  });

  // Show the card element with the corresponding id
  const tabContent = document.getElementById(tabId);
  tabContent.style.display = 'block';
 });
});

// product tab hide
document.getElementById('profile-tab').style.display = 'none';
document.getElementById('messages-tab').style.display = 'none';

// Display the home tab and card by default
document.getElementById('home-tab').click();
</script>

@endsection