@extends('layouts.app')

@section('content')
<div class="container" id="registerForm">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST"  @submit.prevent="submit" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name"  v-model="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                                    <span v-show="errors.name" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ this.errors.name }}</strong>
                                    </span>
                               
                            </div>
                        </div>
                        
                           <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" v-model="surname"  class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                             
                                      <span v-show="errors.surname" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ errors.surname }}</strong>
                                    </span>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" v-model="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                <span v-show="errors.email" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ errors.email }}</strong>
                                    </span>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  v-model="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                 <span v-show="errors.password" class="-invalid-feedback" style="color:red" role="alert">
                                        <strong>@{{ errors.password }}</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" v-model="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
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





@vite(['resources/js/registration.js'])

@endsection


