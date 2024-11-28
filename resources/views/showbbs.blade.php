<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板内容</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
@include('navbar')
<main role="main" class="container" style="padding:60px 15px 0">
<body>
    <h1>掲示板内容</h1>
    <ul>
        @foreach($bbs as $post)
            <div class="card">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{$post->body}}
                    </p>
                </div>
                <div class="card-footer">
                    {{$post->name}}
                    {{$post->date}}
                </div>
            </div>
            <hr>
        @endforeach
    </ul>
</body>
</main>
</html>