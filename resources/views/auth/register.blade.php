@extends('user_layouts.user_app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">{{ __('Register') }}</div>

    <div class="card-body">
     <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="row mb-3">
       <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

       <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
         value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <div class="row mb-3">
       <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

       <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
         value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <div class="row mb-3">
       <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

       <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
         name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <div class="row mb-3">
       <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

       <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
         autocomplete="new-password">
       </div>
      </div>
      <!-- gender -->
      <div class="row mb-3">
       <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
       <div class="col-mb-12">
        <select name="gender" class="form-control" id="DefaultSelect">
         <option value="">Choose Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
        </select>
       </div>
      </div>

      <!-- type -->
      <div class="row mb-3">
       <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
       <div class="col-mb-12">
        <select name="type" class="form-control" id="DefaultSelect">
         <option value="">Choose User Type</option>
         <option value="Personal">Personal</option>
         <option value="User">User</option>
         <option value="Customer">Customer</option>
        </select>
       </div>
      </div>

      <!-- nrc_type -->
      <div class="row mb-3">
       <label for="nrc_type" class="col-md-4 col-form-label text-md-end">{{ __('NRC') }}</label>

       <div class="col-md-6">
        <input id="nrc_type" type="text" class="form-control @error('nrc_type') is-invalid @enderror" name="nrc_type"
         value="{{ old('nrc_type') }}" required autocomplete="nrc_type" autofocus>

        @error('nrc_type')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- phone  -->
      <div class="row mb-3">
       <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
       <div class="col-md-6">
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
         value="{{ old('phone') }}" required autocomplete="phone" autofocus>
        @error('phone')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- other_phone -->
      <div class="row mb-3">
       <label for="other_phone" class="col-md-4 col-form-label text-md-end">{{ __('Other Phone') }}</label>
       <div class="col-md-6">
        <input id="other_phone" type="text" class="form-control @error('other_phone') is-invalid @enderror"
         name="other_phone" value="{{ old('other_phone') }}" required autocomplete="other_phone" autofocus>
        @error('other_phone')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- father_name -->
      <div class="row mb-3">
       <label for="father_name" class="col-md-4 col-form-label text-md-end">{{ __('Father Name') }}</label>
       <div class="col-md-6">
        <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror"
         name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>
        @error('father_name')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- date of birth -->
      <!-- date of birth -->
      <div class="row mb-3">
       <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

       <div class="col-md-6">
        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
         name="dob" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

        @error('date_of_birth')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- education -->
      <div class="row mb-3">
       <label for="education" class="col-md-4 col-form-label text-md-end">{{ __('Education') }}</label>
       <div class="col-md-6">
        <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education"
         value="{{ old('education') }}" required autocomplete="education" autofocus>
        @error('education')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- occupation -->
      <div class="row mb-3">
       <label for="occupation" class="col-md-4 col-form-label text-md-end">{{ __('Occupation') }}</label>
       <div class="col-md-6">
        <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror"
         name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>
        @error('occupation')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>


      <div class="row mb-0">
       <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
         {{ __('Register') }}
        </button>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection