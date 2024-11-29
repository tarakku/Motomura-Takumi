<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">サークルサイト</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="info">お知らせ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload">画像アップロード</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="album">アルバム</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bbs">掲示板</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showbbs">掲示板内容表示</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deletebbs">掲示板内容削除</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">ログアウト</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>