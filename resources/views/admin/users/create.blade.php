@extends('layouts.admin_app')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

<h1 class="mt-4">Role Create Dashboard</h1>
<ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Role Create Dashboard</li>
</ol>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <i class="fas fa-table me-1"></i>
     Role Create
    </div>
    <div class="card-body">
     <form action="{{ route('admin.users.store') }}" method="post">
      @csrf

      <div class="mb-3 mt-4">
       <label for="title" class="form-label">User Name</label>
       <input type="text" class="form-control" id="title" name="name" placeholder="Enter User Name">
      </div>
      <div class="mb-3 mt-4">
       <label for="title" class="form-label">Email </label>
       <input type="email" class="form-control" id="title" name="email" placeholder="Enter Your Email ">
      </div>
      <div class="mb-3 mt-4">
       <label for="title" class="form-label">Password</label>
       <input type="password" class="form-control" id="title" name="password" placeholder="Enter Your Password">
      </div>

      <div class="form-group mt-4 {{ $errors->has('roles') ? 'has-error' : '' }}">
       <label for="roles">User Role *
        <span class="btn btn-info btn-xs select-all mt-4">Select All</span>
        <span class="btn btn-info btn-xs deselect-all mt-4">Deselect</span></label>
       <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
        @foreach($roles as $id => $roles)
        <option value="{{ $id }}"
         {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
         {{ $roles }}</option>
        @endforeach
       </select>
      </div>


      <div class="form-group">
       <button type="submit" class="btn btn-primary">New User Create</button>
      </div>

     </form>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://rawgit.com/select2/select2/master/dist/js/select2.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
$(document).ready(function() {
 $('.select2').select2();
 $('.select-all').click(function() {
  $(this).parents('.form-group').find('select').select2('destroy').find('option').prop('selected',
   'selected').end().select2();
 });
 $('.deselect-all').click(function() {
  $(this).parents('.form-group').find('select').select2('destroy').find('option').prop('selected',
   '').end().select2();
 });
});
</script>
@endsection