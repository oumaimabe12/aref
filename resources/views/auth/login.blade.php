@extends('login')

@section('content')
<form method="POST" action="{{ route('dashboard') }}">
                        @csrf
                    <div class="mb-3">
                    <label for="email" class="col-md col-form-label text-md-end">{{ __('Email Address') }}</label>
                      <input type="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-3">
                    <label for="password" class="col-md col-form-label text-md-end">{{ __('Password') }}</label>
                      <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                    {{ __('Login') }}
                                </button>
                    </div>
                    
                  </form>

@endsection
