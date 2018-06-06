@extends('layouts.master')
@section('title') ServiceBook-An Online Service Provider @endsection
@section('nav-dynamic')
    <li class="nav-item">
        <a  class="nav-link" href="{{ route('login') }}"><i class="fa fa-user top-icon" aria-hidden="true"></i> Login</a>
    </li>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register Here') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-2 col-form-label text-md-right">{{ __('Frist Name') }}</label>

                            <div class="col-md-4">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="lastname" class="col-md-2 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="currentcountry" class="col-md-2 col-form-label text-md-right">{{ __('Current Country') }}</label>
                            <div class="col-md-4">

                                <select value="AUS" id="currentcountry" data-role="country-selector" class="form-control" name="currentcountry"></select>

                            </div>
                            <label for="currentcity" class="col-md-2 col-form-label text-md-right">{{ __('Current City') }}</label>
                            <div class="col-md-4">
                                <input id="currentcity" type="text" class="form-control" name="currentcity" value="{{ old('currentcity') }}" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="origindistrict" class="col-md-2 col-form-label text-md-right">{{ __('Origin Distict') }}</label>

                            <div class="col-md-4">
                                <input id="origindistrict" type="text" class="form-control{{ $errors->has('origindistrict') ? ' is-invalid' : '' }}" name="origindistrict" value="{{ old('origindistrict') }}" required>

                                @if ($errors->has('origindistrict'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('origindistrict') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary pull-right mt-0">
                            {{ __('Continue') }}
                        </button>

                    </form>
                </div>

                    <hr>
                    <div class="row">
                        <div class="container">
                            <ul>
                                <li> You are few more steps away to be our valuable member</li>
                                <li> We are more concerned about your private information, and won't be shared with anyone</li>
                                <li> Password must be at least 6 character long</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{asset('js/jquery.countrySelector.min.js')}}"></script>
@endsection
