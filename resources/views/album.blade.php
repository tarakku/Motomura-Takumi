<!DOCTYPE html>
<html>
<head>
    <title>アルバム</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@include('navbar')
<main role="main" class="container" style="padding:60px 15px 0">
    <h1>アルバム</h1>

    @foreach($imagePaths as $imagePath)
        <div style="display: inline-block; margin: 10px;">
            <img src="{{ asset($imagePath) }}" alt="画像" width="200" height="200">
        </div>
    @endforeach

    <br>
    <a href="{{ url('/upload') }}" style="display: inline"><button class="btn btn-primary btn-lg">画像をアップロード</button></a>
</main>
</body>
</html>