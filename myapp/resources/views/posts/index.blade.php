<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"> 
    <title>Blog Posts</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        <ul>
            @forelse ($posts as $post)
            <li><a href="">{{ $post -> title}}</a></li>
            @empty
            <li>No posts yet</li>
            @endforelse

            {{--
            @foreach ($posts as $post)
            <li><a href="">{{ $post -> title}}</a></li>
            @endforeach
            --}}
        </ul>
    </div>
</body>
</html>