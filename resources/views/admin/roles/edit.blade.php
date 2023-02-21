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
     <form action="{{ route('admin.roles.update', [$role->id]) }}" method="post">
      @csrf
      @method('PUT')

      <div class="mb-3 mt-4">
       <label for="title" class="form-label">Role Name</label>
       <input type="text" class="form-control" id="title" name="title" value="{{ $role->title }}">
      </div>
      <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
       <label for="permissions">Permission *
        <span class="btn btn-info btn-xs select-all">Select All</span>
        <span class="btn btn-info btn-xs deselect-all">Deslect</span></label>
       <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple" required>
        @foreach($permissions as $id => $permissions)
        <option value="{{ $id }}"
         {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>
         {{ $permissions }}</option>
        @endforeach
       </select>

      </div>
      <div class="form-group">
       <button type="submit" class="btn btn-primary">New Role Create</button>
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