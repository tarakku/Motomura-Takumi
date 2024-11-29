<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ一覧</title>
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
$filePath = public_path('infodata/info.txt'); // public_pathを使用してパスを取得
$line = array();
$fp = fopen($filePath, "r");
//例外処理
if(!$fp)
{
    echo "<p>ファイルがありません</p>";
}
//正規の処理
if($fp)
{
    //1行目のタイトルだけ読み取る
    $title = fgets($fp);
    echo '<p><a href="info.php">'.$title.'</a></p>';
    fclose($fp);
}
//例外処理
if(($fp) && (empty($title)))
{
    echo '<p>お知らせはありません</p>';
    fclose($fp);
}
@endphp


        <!-- 本文ここまで -->
        </div>
    </main>
    </body>
</html>