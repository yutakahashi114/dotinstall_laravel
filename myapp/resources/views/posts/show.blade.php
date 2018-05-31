<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"> 
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{!! n12br(e($body->body)) !!}</p>
    </div>
</body>
</html>