<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板内容削除</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
@include('navbar')
<body>
    <main role="main" class="container" style="padding:60px 15px 0">
        <h1>掲示板内容削除</h1>
        <ul>
            @foreach($bbs as $post)
                <div class="card mb-3">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $post->body }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('bbs.destroy', $post->id) }}" method="POST" class="form-inline">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex align-items-center">
                                <span class="me-3">
                                    {{ $post->name }} - {{ $post->date }}
                                </span>
                                <input type="password" name="pass" placeholder="削除パスワード" class="form-control me-2" required>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？');">削除</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </ul>
    </main>
</body>
</html>
