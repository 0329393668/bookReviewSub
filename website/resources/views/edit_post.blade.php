<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/i85scy7n6y2hzshzobqxzc9hjhia5fbkci90rc170vh6btsw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            width: 1200,
            height: 600,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: false
        });
    </script>
</head>
<body>
<h2>Sửa bài viết</h2>
<form action="{{route('post.update', $post->id)}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="pwd">name:</label>
        <input type="text" name="name" value="{{$post->name}}">
    </div>
    <div class="mb-3">
        <label for="pwd">Content:</label>
        <textarea class="tinyMce" name="content">{!! $post->content !!}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
