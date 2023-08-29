<a href="{{ route('product',['product_id' => $pillow->id]) }}" class="pillowBox">
    <p>No.{{$pillow->id}}</p>
    @foreach ($images as $image)
        @if ($image->id == $pillow->img_id)
        <p hidden>{{$img_pass = $image->img_pass}}</p>
        @endif
    @endforeach
    <img src="{{ asset($img_pass) }}">
    <h3>{{ $pillow->name }}</h3>
    <p>{{ $pillow->explanation }}</p>
</a>
