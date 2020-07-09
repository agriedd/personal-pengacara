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
                        <div class="h5 text-muted font-weight-light">
                            Konfirmasi Password
                        </div>
                        <hr class="row">
                        <div>
                            <div class="small">
                                Harap konfirmasi password Anda sebelum menanjutkan.
                            </div>
        
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="password" class="col-12 col-form-label text-muted small">{{ __('Password') }}</label>
        
                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Konfirmasi Password
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <div class="pt-3">
                                                <a class="btn btn-link btn-sm" href="{{ route('password.request') }}">
                                                    Lupa password Anda?
                                                </a>
                                            </div>
                                        @endif
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
