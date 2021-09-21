<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title" value="{{ $article->title }}">
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body">{{ $article->body }}</textarea>
        </p>
        <input type="submit" value="更新">
    </form>
</body>
</html>