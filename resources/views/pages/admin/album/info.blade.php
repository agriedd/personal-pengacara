{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | Album 🔖 | {{ $album->judul }}
        </h4>
    </div>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-lg-4">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control" name="foto" id="foto" required>
                </div>
                <div class="form-group">
                    <input type="text" name="judul" id="judul" class="form-control form-control-sm" required placeholder="Judul">
                </div>
                <div class="form-group">
                    <textarea name="keterangan" id="keterangan" rows="10" class="form-control" placeholder="Keterangan"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Tambah
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div>
        List Galeri
        <ul>
            @forelse ($album->galeri as $galeri)
                <li>
                    <div class="d-flex">
                        <div class="img-sm" style="background-image: url('@isset($galeri->gambar){{ $galeri->gambar->src_xs }}@endisset')"></div>
                        <div>
                            <a href="#">
                                <div class="">
                                    {{ $galeri->judul }}
                                </div>
                            </a>
                            <div class="text-muted">
                                {{ $galeri->created_at->diffForHumans() }}
                            </div>
                        </div>
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
