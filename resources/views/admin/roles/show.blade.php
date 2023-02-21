@extends('layouts.admin_app')
@section('content')
<h1 class="mt-4">Role Detail Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Role Dashboard</li>
</ol>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card mb-4">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Role Detail
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td>{{ $role_detail->id }}</td>
      </tr>
      <tr>
       <th>Title</th>
       <td>{{ $role_detail->title }}</td>
      </tr>
      <tr>
       <th>Permission</th>
       <td>
        @foreach ($role_detail->permissions as $permission)
        <span class="btn btn-primary btn-sm bbadge text-bg-primary">{{ $permission->title }}</span>
        @endforeach
       </td>
      </tr>
      <tr>
       <th>Created At</th>
       <td>
        <!-- created at with date formate -->
        {{ $role_detail->created_at->format('d-m-Y') }}
       </td>
      </tr>
      <tr>
       <th>Updated At</th>
       <td>
        <!-- updated at with date formate -->
        {{ $role_detail->updated_at->format('d-m-Y') }}
       </td>
      </tr>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>

@endsection