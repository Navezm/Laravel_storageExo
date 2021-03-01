<section class="container mt-5">
    <h1 class="text-center">Images saved in the database</h1>
    
    <div class="row">
        @foreach ($DB as $item)
            @if (Str::after($item->src, '.') != 'jpg' && Str::after($item->src, '.') != 'png')
                <div class="col">
                    <p class="text-danger">{{$item->src}}</p>
                </div>
            @endif
        @endforeach
    </div>
</section>