{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | Album 🔖
        </h4>
    </div>
    <div>
        Tambah Album
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-control form-control-sm">
            </div>
            @error('nama')
                <div class="alert alert-danger small">
                    @foreach ($errors->get('nama') as $error)
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
        List Album
        <ul>
            @forelse ($albums as $album)
                <li>
                    <a href="{{ route('admin.album.info', [ 'album' => $album->id ]) }}">
                        <div class="font-weight-bold">
                            {{ $album->nama }}
                        </div>
                    </a>
                    <div class="text-muted small">
                        {{ $album->keterangan }}
                    </div>
                    <div class="text-muted small">
                        {{ $album->total_galeri }} Galeri
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
