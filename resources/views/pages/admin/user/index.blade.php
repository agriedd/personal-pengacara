{{-- Halaman Panel Admin 🔥 --}}


@extends('layouts.admin')

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | User 🤼
        </h4>
    </div>
    <div>
        List User
        <ul>
            @forelse ($users as $user)
                <li>
                    {{ $user->nama }} - 
                    @isset($user->info->facebook)
                        facebook {{ $user->info->facebook }}
                    @endisset
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
