<a href="{{ route('product',['product_id' => $light->id]) }}" class="lightBox">
    <p>No.{{$light->id}}</p>
    @foreach ($images as $image)
        @if ($image->id == $light->img_id)
        <p hidden>{{$img_pass = $image->img_pass}}</p>
        @endif
    @endforeach
    <img src="{{ asset($img_pass) }}">
    <h3>{{ $light->name }}</h3>
    <p>{{ $light->explanation }}</p>
</a>
