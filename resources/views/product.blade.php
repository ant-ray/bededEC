@extends('layout')
@section('content')
    <script src="{{ asset('../js/product.js') }}"></script>
    <!DOCTYPE html>
    <div class="wapper">

        <div class="detailHead">
            <h1>
                {{$product->name}}
            </h1>
        </div>

        <div class="detailWapper">
            <div class="detailBox">
                <img src="{{ asset($imgPass) }}">
                <div class="detail">
                    <p class="explanation">{{$product->explanation}}</p>
                    <p class="detailText">{{$product->detail}}</p>
                    @if ($product->kinds == 1)
                        <p class="kinds">種類・ベッド</p>
                    @elseif($product->kinds == 2)
                        <p>種類・ライト</p>
                    @elseif($product->kinds == 3)
                        <p>種類・まくら</p>
                    @else
                        <p>種類・その他</p>
                    @endif
                    <p class="price">price・・・{{$product->price}}yen</p>
                </div>
                <div class="purchase">
                    <a class="purchaseBtn" href="" onclick="">purchase⇨</a>
                </div>
            </div>
        </div>

    </div>

    </html>
@endsection
<!DOCTYPE html>
