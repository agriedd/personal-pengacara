{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | Halaman 🔖
        </h4>
    </div>
    <div>
        List Halaman
        <ul>
            @forelse ($halaman as $data)
                <li>
                    <div class="font-weight-bold">
                        {{ $data->info->title }}
                    </div>
                    <div class="small py-2 text-muted">
                        {{ $data->created_at }}
                    </div>
                    <div class="small">
                        {!! $data->info->body !!}
                    </div>
                </li>
            @empty
                <li>
                    <div class="text-muted">
                        Belum ada data
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection
