{{-- js読み込み --}}
@if (session('kindFlgs') == 'registerErr')
    <script src="{{ asset('../js/register.js') }}"></script>
@elseif(session('kindFlgs') == 'loginErr')
    <script src="{{ asset('../js/login.js') }}"></script>
@else
    <script src="{{ asset('../js/header.js') }}"></script>
@endif
<div id=headmain>
    <!---ヘッダー--->
    <div class=head>

        <div class="headerLogo">
            <a href="{{ route('top') }}">Beded EC</a>
        </div>

        <nav class=navi>
            <a href="{{ route('top') }}" class="top">はじめに</a>
            <a href="{{ route('look') }}" class="look">寝具を探す</a>
        </nav>

        @if (Session::has('name'))
            <div id=logout>
                <a>お帰りなさい{{ session('name') }}様</a>
                <div class="outbox">
                    <a href="{{ route('logout') }}">ログアウト</a>
                </div>
            </div>
        @else
            <div id=signin>
                <a href="">サインイン</a>
            </div>
        @endif

    </div>
</div>

<!---login--->
<div id=login style="display:none;">
    <div class=loginbox>
        <div class=logbox1>
            <p>ログイン
            <p>
        </div>
        <div class=logbox2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if (session('kindFlgs') == 'loginErr')
                    <p class="logerr">{{ session('error_message') }}</p>
                    <p class="logerr">{{ session('error_message_detail') }}</p>
                @endif
                @if ($errors->has('logEmail'))
                    <p class="logerr">{{ $errors->first('logEmail') }}</p>
                @endif
                <input type="email" name="logEmail" value="{{ old('logEmail') }}" placeholder="メールアドレス">
                @if ($errors->has('logPassword'))
                    <p class="logerr">{{ $errors->first('logPassword') }}</p>
                @endif
                <input type="password" name="logPassword" value="{{ old('logPassword') }}" placeholder="パスワード">
                <input class="sends" type="submit" value="送信">
            </form>
            <p class="registerLink">新規会員登録は<a href="">こちら</a></p>
        </div>
    </div>
</div>

<!---register--->
<div id=register style="display:none;">
    <div class=registerbox>
        <div class=registerbox1>
            <p>新規登録
            <p>
        </div>
        <div class=registerbox2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @if ($errors->has('regName'))
                    <p>{{ $errors->first('regName') }}</p>
                @endif
                <input type="text" name="regName" value="{{ old('regName') }}" placeholder="お名前">
                @if ($errors->has('regEmail'))
                    <p>{{ $errors->first('regEmail') }}</p>
                @endif
                <input type="email" name="regEmail" value="{{ old('regEmail') }}" placeholder="メールアドレス">
                @if ($errors->has('regPassword'))
                    <p>{{ $errors->first('regPassword') }}</p>
                @endif
                <input type="password" name="regPassword" value="{{ old('regPassword') }}" placeholder="パスワード">
                @if ($errors->has('regPasswordConfirm'))
                    <p>{{ $errors->first('regPasswordConfirm') }}</p>
                @endif
                <input type="password" name="regPasswordConfirm" value="{{ old('regPasswordConfirm') }}"
                    placeholder="パスワード(再入力)">
                <input class="rsends" type="submit" value="送信">
            </form>
        </div>
    </div>
</div>



{{-- フラッシュメッセージ --}}
@if (session('flash_message'))
<script src="{{ asset('../js/success.js') }}"></script>
<div id=flashMessage style="display:none;">
    <div class=flashbox>
        <h1>
            {{ session('flash_message') }}
        </h1>
        <p>お帰りなさいませ🎉</p>
    </div>
</div>
@endif
