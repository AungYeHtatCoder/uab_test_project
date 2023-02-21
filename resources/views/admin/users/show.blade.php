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