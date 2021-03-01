<section class="container">
    <h1 class="text-center">Images saved in the database</h1>
    
    <div class="row">
        @foreach ($DB as $item)
            @if (Str::after($item->src, '.') == 'jpg' || Str::after($item->src, '.') == 'png')
                <div class="col">
                    <img class="w-100" src="{{asset('storage/'.$item->src)}}" alt="">
                </div>
            @endif
        @endforeach
    </div>
</section>