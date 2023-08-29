<a href="{{ route('product',['product_id' => $bed->id]) }}" class="bedBox">
    <p>No.{{$bed->id}}</p>
    @foreach ($images as $image)
        @if ($image->id == $bed->img_id)
        <p hidden>{{$img_pass = $image->img_pass}}</p>
        @endif
    @endforeach
    <img src="{{ asset($img_pass) }}">
    <h3>{{ $bed->name }}</h3>
    <p>{{ $bed->explanation }}</p>
</a>
