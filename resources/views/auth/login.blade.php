@extends('layouts.app')

@section('content')
<div class="container" id="loginForm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" @submit.prevent="submit" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"   v-model="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  <span v-show="errors.email" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ errors.email }}</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  v-model="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                 <span v-show="errors.password" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ errors.password }}</strong>
                                    </span>
                            </div>
                        </div>

                     
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@vite(['resources/js/login.js'])

@endsection
