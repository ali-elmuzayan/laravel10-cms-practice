@extends('admin.auth.master')
@section('title', __('keywords.login'))

@section('content')


        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="post" action="{{ route('admin.login.store') }}">
            @csrf
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
          <h1 class="h6 mb-3">{{ __('keywords.signIn') }}</h1>
           <x-auth-session-status class="mb-4" :status="session('status')" />
          <div class="form-group">
            <label for="inputEmail" class="sr-only">{{ __('validation.attributes.email') }}</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="{{ __('validation.attributes.email') }}" required="" autofocus="" name="email" value="{{ old('email') }}">
               <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">{{ __('validation.attributes.password') }}</label>
            <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="{{ __('validation.attributes.password') }}" required="" name="password">
               <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me" name="remember"> {{ __('keywords.rememberMe') }} </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('keywords.login') }}</button>

        </form>
@endsection
