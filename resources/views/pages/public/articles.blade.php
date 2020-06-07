{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}


@extends('layouts.articles')

@section('content')
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dignissimos placeat quam natus, et repellat aut! Quae esse, praesentium quod veritatis reiciendis ad tempora amet repudiandae odio quibusdam, magnam iste?
    </div>
    @isset($slug)
        {{ $slug }}
    @endisset
@endsection
