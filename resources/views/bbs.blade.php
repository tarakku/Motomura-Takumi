<!doctype html>
<html lang="ja" >
  <head>
    <title>掲示板</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  @include('navbar')
    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
      <!-- ここから「本文」-->
        <h1>掲示板　書き込みフォーム</h1>
        @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
        @endif
        
         <form action="{{ route('bbs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>タイトル</label>
                <input type="text" name="title" id="title" class="form-control">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>名前</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </select>
            </div>
            <div class="form-group">
                <label>内容</label>
                <textarea name="body" id="body" class="form-control"></textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </select>
            </div>
            <div class="form-group">
                <label>パスワード</label>
                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
                @error('pass')
                      <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">投稿</button>
        </form>
        <!-- 本文ここまで -->
      </div>
    </main>

   </body>
</html>
