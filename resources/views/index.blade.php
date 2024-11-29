<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@include('navbar')
<body class="hero-section">
    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->
        <h1>お知らせ</h1>

        @php
        $filePath = public_path('infodata/info.txt'); // ファイルパス
        $title = null; // 初期値を設定
        if (file_exists($filePath) && is_readable($filePath)) {
            $fp = fopen($filePath, "r");
            if ($fp) {
                $title = fgets($fp); // ファイルから1行目を取得
                fclose($fp);
            }
        }
        @endphp

        @if ($title)
            <p><a href="{{ route('info') }}">{{ $title }}</a></p>
        @else
            <p>お知らせはありません</p>
        @endif

        <!-- 本文ここまで -->
    </main>
</div>
</body>
</html>
