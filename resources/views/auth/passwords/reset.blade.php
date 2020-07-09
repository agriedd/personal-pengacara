@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8 col-10" style="min-height: 100vh">
            <div class="justify-middle">
                @component('x.tip.default')
                    @slot('tip', 'tip-center-top bg-light text-light')
                    @slot('card', 'text-dark')
                    <div>
                        <div>
                            <div class="h5 font-weight-light">{{ __('Reset Password') }}</div>
                        </div>
                        <hr class="row">

                        <div>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="email" class="col-12 col-form-label">{{ __('E-Mail Address') }}</label>

                                    <div class="col-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-12 col-form-label">{{ __('Password') }}</label>

                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-12 col-form-label">{{ __('Confirm Password') }}</label>

                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
</div>
@endsection
