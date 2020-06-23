{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.articles')

@section('content')
    <div>
        <h3 class="font-weight-light">
            {{ $artikel->info->title }}
        </h3>
    </div>
@endsection
