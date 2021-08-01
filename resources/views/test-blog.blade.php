<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/blog.css">
</head>
<body>
    @if ($errors->any())
    @foreach($errors as $error)
    $error<br>
    @endforeach
    @endif
    <form id='blog-add-post-form' action="{{ route('blog_submit') }}" method='post'>
        @csrf
        <input type="hidden" id='update_blog_post-url' value="{{ route('update_blog_post') }}?post_subject=LifeStyle">
        <input type="text" name='title'>
        <input type='text' name='subject'>
        <input type="date" name='date'>
        <textarea name="description"></textarea>
        <input type="submit" id='add-post-btn'>
    </form>
    <div class="container">

    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
    $(document).ready(function () {
        $.ajax({
            url: "{{ route('update_blog_post') }}?post_subject=LifeStyle",
            cache: false,
            success: function(html){
                cont.html(html);
            }
        });
    });
    </script>
</body>
</html>
