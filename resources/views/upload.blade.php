<!DOCTYPE html>
<html>
<head>
    <title>画像アップロード</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main role="main" class="container" style="padding:60px 15px 0">

    <div>
        <a href="{{ route('home') }}" style="display: inline"><button class="btn btn-primary btn-lg">トップページへ</button></a>
    </div>
    <br />
    <div>
        <h1>画像アップロード</h1>
        <!--送信はPOST 受信はGET -->
        <!--web.phpに記述してあるルーティングを呼び出す route('image.upload')  -->
        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
            <!--@csrf クロスサイトリクエストフォージェリ対策 -->
            @csrf
            <input type="file" name="image" required style="margin-top: 20px">
            <br />
            <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px">アップロード</button>
        </form>
    </div>
    </main>
</body>
</html>