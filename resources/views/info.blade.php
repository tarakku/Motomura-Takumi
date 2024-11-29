<!doctype html>
<html lang="ja">
  <head>
    <title>お知らせ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    @include('navbar')

    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->
        <h1>お知らせ</h1>

        @php
          // ファイル読み込みとデータ取得
          $filePath = public_path('infodata/info.txt');
          $lines = [];
          if (file_exists($filePath) && is_readable($filePath)) {
              $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // 各行を配列として取得
          }
        @endphp

        @if (empty($lines))
          <p>お知らせはありません。</p>
        @else
          @foreach ($lines as $index => $line)
            @if ($index === 0)
              <h2>{{ $line }}</h2> <!-- 1行目をタイトルとして表示 -->
            @else
              <p>{{ $line }}</p> <!-- 2行目以降を本文として表示 -->
            @endif
          @endforeach
        @endif
        <!-- 本文ここまで -->
      </div>
    </main>

  </body>
</html>
