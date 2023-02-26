@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">User Detail Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">User Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
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
   </div>
  </div>
 </div>
</div>

@endsection