{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | Gambar 🔖
        </h4>
    </div>
    <div>
        Tambah gambar
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
            @error('foto')
                <div class="alert alert-danger small">
                    @foreach ($errors->get('foto') as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @enderror
            <div>
                <button class="btn btn-sm btn-primary">
                    Kirim
                </button>
            </div>
        </form>
    </div>
    <div>
        List Gambar
        <ul>
            @forelse ($listgambar as $gambar)
                <li>
                    <div>
                        <img src="{{ $gambar->src_sm }}" alt="{{ $gambar->alt }}">
                    </div>
                    <div class="font-weight-bold">
                        {{ $gambar->alt }}
                    </div>
                </li>
            @empty
                <li>
                    <div class="text-muted">
                        Belum ada gambar
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection
