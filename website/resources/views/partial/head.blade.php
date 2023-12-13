<!-- Favicon -->
<link rel="shortcut icon" href="{{asset("backend/images/favicon.ico")}}" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset("backend/css/bootstrap.min.css")}}">
<!-- Typography CSS -->
<link rel="stylesheet" href="{{asset("backend/css/typography.css")}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset("backend/css/style.css")}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset("backend/css/responsive.css")}}">
<!-- Full calendar -->
<link href='{{asset("backend/fullcalendar/core/main.css")}}' rel='stylesheet' />
<link href='{{asset("backend/fullcalendar/daygrid/main.css")}}' rel='stylesheet' />
<link href='{{asset("backend/fullcalendar/timegrid/main.css")}}' rel='stylesheet' />
<link href='{{asset("backend/fullcalendar/list/main.css")}}' rel='stylesheet' />
<link rel="stylesheet" href="{{asset("backend/css/flatpickr.min.css")}}">

<!-- Place the first <script> tag in your HTML's <head> -->
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
        content_css: false,
        file_picker_callback (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

            tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'Laravel File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    console.log(message)
                    let url = message.content;  // Lấy ra url của file ảnh
                    url = url.replace(/^.*\/\/[^\/]+/, ''); // Xóa domain ảnh
                    message.content = url // Gán lại url cho ảnh
                    callback(message.content, { text: message.text })
                },

            })}
    });
</script>


