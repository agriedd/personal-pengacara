@php
    $row = $row ?? 10;
    $col = $col ?? 4;
    $height = $height ?? '4rem';
@endphp
<div class="p-3 loading">
    <div class="row m-0">
        <div class="col-12" style="height: 72px; padding: 0rem .15rem">
            <div class="card content h-100 w-100 border-0">
                
            </div>
        </div>
        <div class="col-12 px-0 pb-1"></div>
        @for ($i = 0; $i < $row; $i++)
            @for ($j = 0; $j < $col; $j++)
                <div class="col" style="height: {{ $height }}; padding: .15rem">
                    <div class="card content h-100 w-100 border-0">
                        
                    </div>
                </div>
            @endfor
            <div class="col-12 px-0 pb-1"></div>
        @endfor
    </div>
</div>