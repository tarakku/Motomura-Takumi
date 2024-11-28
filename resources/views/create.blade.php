<form action="/store" method="POST">
    @csrf
    <input type="text" name="title" placeholder="タイトル">
    <textarea name="content" placeholder="内容"></textarea>
    <button type="submit">投稿</button>
</form>
