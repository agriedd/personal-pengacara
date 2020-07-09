@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="min-height: 100vh">
            <div class="justify-middle">
                @component('x.tip.default')
                    @slot('tip', 'tip-center-bottom bg-light text-light')
                    @slot('card', 'text-dark')
                    <div class="">
                        Verifikasi Alamat Email Anda
                    </div>
                    <hr class="row divider">
                    <div class="small">
                        @if (session('resent'))
                            <div class="alert col-md-6 px-0">
                                @component('x.tip.default')
                                    @slot('tip', 'tip-left-top bg-success text-success')
                                    @slot('card', 'text-light')
                                    <div class="d-flex">
                                        <div class="pr-3">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-all" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14l.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                                            </svg>
                                        </div>
                                        <div class="small">
                                            Sebuah email verifikasi baru telah dikirim ke alamat email Anda :).
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                        @endif
                        Sebelum menyelesaikan proses ini, silahkan periksa email Anda untuk mendapatkan link verifikasi.
                        Jika Anda tidak mendapatkan email verifikasinya, silahkan cek pada kotak spam. <br>
                        <br>
                        Jika tidak ada, 
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-blue btn-sm">Klik disini untuk mengirim ulang link verifikasi</button>.
                        </form>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
</div>
@endsection
