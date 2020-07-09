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
                            <div class="h5 font-weight-light">
                                {{ __('Reset Password') }}
                            </div>
                        </div>
                        <hr class="row">
                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-12 col-form-label">Alamat Email</label>
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Kirim link reset password
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
