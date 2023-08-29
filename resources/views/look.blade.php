@extends('layout')
@section('content')
    <script src="{{ asset('../js/look.js') }}"></script>
    <!DOCTYPE html>
    <div class="wapper">

        <div class="lookFor">
            <h1>
                あなたにとって眠りがより良いものになりますように
            </h1>
            <p>
                贅沢な眠りを手に入れるなら、最高級の寝具コレクションをご覧ください。<br>
                この後の数々のコレクションを閲覧いただければ、あなたに寄り添う寝具が見つかるはずです。<br>
            </p>
        </div>

        <div class="anderArrow">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>

        <div class="bed">
            <h2>bed</h2>
            <p>最高級のマットレスとシックなデザインのベッド選び抜きました</p>

            <div class="bedBoxWrap">
                @foreach ($beds as $bed)
                    @include('bedBox')
                @endforeach
            </div>

        </div>

        <div class="pillow">
            <h2>pillow</h2>
            <p>快適な枕の触感が、寝室での至福のひとときを演出します。</p>

            <div class="pillowBoxWrap">
                @foreach ($pillows as $pillow)
                    @include('pillowBox')
                @endforeach
            </div>

        </div>

        <div class="light">
            <h2>light</h2>
            <p>快適な枕の触感が、寝室での至福のひとときを演出します。</p>

            <div class="lightBoxWrap">
                @foreach ($lights as $light)
                    @include('lightBox')
                @endforeach
            </div>

        </div>

    </div>

    </html>
@endsection
<!DOCTYPE html>
