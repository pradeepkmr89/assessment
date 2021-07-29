@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">{{ __('Register') }}</div>
            <div class="col-md-12">
               <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                     @csrf
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="fname" >{{ __(' First Name') }}</label> 
                           <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus> 
                           @error('fname')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror 
                        </div>
                        <div class="form-group col-md-6">
                           <label for="lname"  >{{ __('Last Name') }}</label>
                           <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                           @error('lname')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="email"  >{{ __('E-Mail Address') }}</label> 
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group col-md-6">
                           <label for="password">{{ __('Password') }}</label>
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div> 
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="datetimepicker4">{{ __(' Date of Birth') }}</label>
                           <input readonly id="datepicker" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                           @error('dob')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group col-md-6">
                           <label for="gender" >{{ __(' Gender') }}</label>
                           <div class="form-check">
                              <input class="form-check-input " checked type="radio" name="gender" id="gender" value="male">
                              <label class="form-check-label mr-4 " for="gender"> Male  </label> 
                              <input class="form-check-input  " type="radio" name="gender" id="gender1"  value="female"> <label class="form-check-label mr-4" for="gender1"> Female    </label>
                           </div>
                           @error('gender')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="income"  >{{ __(' Annual Income') }}</label>
                           <input id="income" type="text" class="form-control @error('income') is-invalid @enderror" name="income" value="{{ old('income') }}" required autocomplete="income" autofocus>
                           @error('income')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group col-md-6">
                           <label for="occupation" >{{ __(' Occupation') }}</label>
                           <select name="occupation" id="occupation" class="form-control" aria-label="Default select example">
                              <option selected>Open this select  </option>
                              <option value="1">Private job</option>
                              <option value="2">Government Job</option>
                              <option value="3">Business</option>
                           </select>
                           @error('occupation')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="fam_type" >{{ __(' Family Type') }}</label>
                           <select name="fam_type" class="form-control"  id="fam_type" aria-label="Default select example">
                              <option selected>Open this select </option>
                              <option value="1">Joint Family</option>
                              <option value="2">Nuclear Family</option>
                           </select>
                           @error('fam_type')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group col-md-6">
                           <label for="manglik">{{ __(' Manglik') }}</label>
                           <select name="manglik" id="manglik" class="form-control" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="Y">Yes</option>
                              <option value="N">No</option>
                           </select>
                           @error('manglik')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <hr/>
                     <h4>Partner Preference </h4>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="partner_fam_type" >{{ __(' Family Type') }}</label>
                           <select multiple name="partner_fam_type[]" class="form-control"  id="partner_fam_type" aria-label="Default select example">
                              <option selected>Open this select </option>
                              <option value="1">Joint Family</option>
                              <option value="2">Nuclear Family</option>
                           </select>
                           @error('partner_fam_type')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group col-md-6">
                           <label for="partner_occupation" >{{ __(' Occupation') }}</label>
                           <select multiple name="partner_occupation[]" id="partner_occupation" class="form-control" aria-label="Default select example">
                              <option selected>Open this select  </option>
                              <option value="1">Private job</option>
                              <option value="2">Government Job</option>
                              <option value="3">Business</option>
                           </select>
                           @error('partner_occupation')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="partner_income"  >{{ __(' Annual Income') }}</label>
                           <b>500000</b> &nbsp;&nbsp;&nbsp;<input id="ex2" name="partner_income" type="text" class="span2" value="" data-slider-min="500000" data-slider-max="1200000" data-slider-step="50000" data-slider-value="[500000,650000]"/>  <b>1200000</b> 
                        </div>
                        <div class="form-group col-md-6">
                           <label for="partner_manglik">{{ __(' Manglik') }}</label>
                           <select name="partner_manglik" id="partner_manglik" class="form-control" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="Y">Yes</option>
                              <option value="N">No</option>
                           </select>
                           @error('partner_manglik')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group row mb-0">
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
</div>
@endsection