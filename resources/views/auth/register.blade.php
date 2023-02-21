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

      <!-- religion with select  options-->
      <div class="row mb-3">
       <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('Religion') }}</label>

       <div class="col-md-6">
        <select name="religion" id="" class="form-control">
         <option value="">Select Religion</option>
         <!-- App\Models\Religion::ReligionOptions -->
         @foreach (App\Models\Religion::ReligionOptions() as $religion)
         <option value="{{ $religion }}">{{ $religion }}</option>
         @endforeach
        </select>
       </div>
      </div>

      <!-- country  -->
      <div class="row mb-3">
       <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>

       <div class="col-md-6">
        <select name="country" id="" class="form-control">
         <option value="">Select Country</option>
         <!-- App\Models\Religion::ReligionOptions -->
         @foreach (App\Models\Country::CountryOptions() as $country)
         <option value="{{ $country }}">{{ $country }}</option>
         @endforeach
        </select>
       </div>
      </div>

      <!-- city -->

      <div class="row mb-3">
       <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

       <div class="col-md-6">
        <select name="city" id="" class="form-control">
         <option value="">Select City</option>
         <!-- App\Models\Religion::ReligionOptions -->
         @foreach (App\Models\City::CityOptions() as $city)
         <option value="{{ $city }}">{{ $city }}</option>
         @endforeach
        </select>
       </div>
      </div>

      <!-- state -->

      <div class="row mb-3">
       <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

       <div class="col-md-6">
        <select name="state" id="" class="form-control">
         <option value="">Select State</option>
         <!-- App\Models\Religion::ReligionOptions -->
         @foreach (App\Models\State::StateOptions() as $state)
         <option value="{{ $state }}">{{ $state }}</option>
         @endforeach
        </select>
       </div>
      </div>

      <!-- zip_code -->
      <div class="row mb-3">
       <label for="zip_code" class="col-md-4 col-form-label text-md-end">{{ __('Zip Code') }}</label>
       <div class="col-md-6">
        <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code"
         value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus>
        @error('zip_code')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>
      <!-- contact_address -->
      <div class="row mb-3">
       <label for="contact_address" class="col-md-4 col-form-label text-md-end">{{ __('Contact Address') }}</label>
       <div class="col-md-6">
        <input id="contact_address" type="text" class="form-control @error('contact_address') is-invalid @enderror"
         name="contact_address" value="{{ old('contact_address') }}" required autocomplete="contact_address" autofocus>
        @error('contact_address')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- permanent_address -->
      <div class="row mb-3">
       <label for="permanent_address" class="col-md-4 col-form-label text-md-end">{{ __('Permanent Address') }}</label>
       <div class="col-md-6">
        <input id="permanent_address" type="text" class="form-control @error('permanent_address') is-invalid @enderror"
         name="permanent_address" value="{{ old('permanent_address') }}" required autocomplete="permanent_address"
         autofocus>
        @error('permanent_address')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- business_address -->
      <div class="row mb-3">
       <label for="business_address" class="col-md-4 col-form-label text-md-end">{{ __('Business Address') }}</label>
       <div class="col-md-6">
        <input id="business_address" type="text" class="form-control @error('business_address') is-invalid @enderror"
         name="business_address" value="{{ old('business_address') }}" required autocomplete="business_address"
         autofocus>
        @error('business_address')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <!-- status with input tpye hidden -->
      <div class="row mb-3">
       <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

       <div class="col-md-6">
        <input id="status" type="hidden" class="form-control @error('status') is-invalid @enderror" name="status"
         value="pending" required autocomplete="status" autofocus>

        @error('status')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>
      <!-- remark with textarea -->
      <div class="row mb-3">
       <label for="remark" class="col-md-4 col-form-label text-md-end">{{ __('Remark') }}</label>

       <div class="col-md-6">
        <textarea name="remark" id="" cols="30" rows="10" class="form-control"></textarea>
        @error('remark')
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