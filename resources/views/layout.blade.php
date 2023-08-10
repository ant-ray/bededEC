<!-- 継承元 -->
<html>

<head>
    <meta charset='utf-8'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Beded EC</title>
</head>

<body>
    <!-- 固定ヘッダー -->
    <header>@include('header')</header>
    <!-- 各ページ出力 -->
    <main>
        @yield('content')
    </main>
    <!-- 固定フッターー -->
    <p class="button">Jump to top</p>
    <footer>@include('footer')</footer>
</body>

</html>
