<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <link rel="icon" href="{{ asset('img/CTFicon.jpg') }}" type="image/jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script defer src="../Js/main.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <nav class="main-menu">
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
                <li class="nav-item active">
                    <a href="/admin-add-challenge">
                        <i class="fa fa-trophy nav-icon"></i>
                        <span class="nav-text">Challenges</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/solved">
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
    </nav>
    <section class="content">
        <div class="inside-content">
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-m ono text-success">
                    Add a new challenge
                </div>
            </div>
            <form action="{{ route('admin.storeChallenge') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="1">OSINT</option>
                        <option value="2">REVERSE</option>
                        <option value="3">CRYPTO</option>
                        <option value="4">FORENSIC</option>
                        <option value="5">WEB</option>
                        <option value="6">MISC</option>
                        <option value="7">STEGANO</option>
                        <option value="8">PROGRAMMING</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="flag">Flag:</label>
                    <input type="text" class="form-control" id="flag" name="flag" required>
                </div>
                <div class="form-group">
                    <label for="points">Points:</label>
                    <input type="number" class="form-control" id="points" name="points" required>
                </div>
                <button type="submit" class="btn btn-success">Add Challenge</button>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>