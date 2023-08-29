@extends('layout')
@section('content')
    {{-- js読み込み --}}
    <script src="{{ asset('../js/top.js') }}"></script>
    <!DOCTYPE html>
    <div class="wapper">

        <div class="logo">
            <h1>Beded EC</h1>
        </div>

        <div id="start" class="business">
            <h2>心地よい最高の眠りへ</h2>
            <p>Beded ECでは、あなたを包み込む最高の睡眠パートナーを見つけることができます</p>
            <div class="slider">
                <img src="{{ asset('img/sleep_lady.jpeg') }}">
                <img src="{{ asset('img/bedroom4.jpeg') }}">
                <img src="{{ asset('img/light.jpg') }}">
            </div>
            <p>あなたの体にぴったりの寝具。カスタマイズ可能なオプションで、個々のニーズに合った睡眠環境を提供します。</p>
            <p>美しいデザインと優れた機能性を兼ね備えた寝具で、寝室を理想の癒しの場所に変えませんか？</p>
        </div>

        <div class="me">
            <h2>Beded ECとは？？</h2>
            <p>我々について簡単に紹介をさせて下さい。<br>
                我々はあなたにとっての最高の眠り、もしくは極上のリラックスを提供する会社です。<br>
                眠りの質によるパフォーマンスの効果というのは自身が想像するより大きいものです。<br>
                このストレス社会の中を駆け抜けるあなたにこそ、最高の眠りをお届けさせて下さい。<br>
                高品質かつ低価格でお求めいただけます。<br>
                ぜひ、bededECをお楽しみください。<br>
            </p>
        </div>

        <div class="nextPage">
            <a href="{{ route('look') }}">
                <img class="nextImg" src="{{ asset('img/light2.jpeg') }}" alt="ふかふか枕のベッド">
            </a>
            <a class="nextBtn" href="{{ route('look') }}">next⇨</a>
        </div>


    </div>

    </html>
@endsection
