<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <link rel="icon" href="{{ asset('img/CTFicon.jpg') }}" type="image/jpg">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">
    <script defer src="../Js/main.js"></script>
    <link rel="stylesheet" href="{{ asset('js/dashboard.js') }}">
    <title>Capture And Flag</title>
</head>

<body>
    <div id="particles-js"></div>
    <nav class="main-menu">
        <div>
            <div class="user-info">
                <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                <p>Name User</p>
            </div>
            <ul>
                <li class="nav-item ">
                    <a href="/dashboard">
                        <i class="fa fa-home nav-icon"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin-user">
                        <i class="fa fa-users nav-icon"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin-challenge">
                        <i class="fa fa-trophy nav-icon"></i>
                        <span class="nav-text">Challenges</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="solved">
                        <i class="fa fa-check nav-icon"></i>
                        <span class="nav-text">Solved</span>
                    </a>
                </li>
            
            <li class="nav-item activa">
                <a href="/notif">
                    <i class="fa fa-bell nav-icon"></i>
                    <span class="nav-text">Notifications</span>
                </a>
            </li>
            </ul>
        </div>
        <ul>
            <li class="nav-item">
                <a href="/setting-admin">
                    <i class="fa fa-cog nav-icon"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/">
                    <i class="fa fa-sign-out-alt nav-icon"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="content">
        <div class="inside-content">
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-mono text-success">You are Now Control the notifications alert</div>
            </div>
            <div class="container mt-5">
                <h3 class="text-center">Challenges</h3>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form>
                            <div class="form-group">
                                <label for="title">Title Notification</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <div id="editor-container" style="height: 200px;"></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Initialize Quill.js -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                        [{ 'direction': 'rtl' }],                         // text direction
               [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
               [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
               [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
               [{ 'font': [] }],
               [{ 'align': [] }],
               ['clean'],                                         // remove formatting button
               ['link', 'image', 'video', 'code-block']           // link and image, video
           ]
       }
   });
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>