<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script defer src="../Js/main.js"></script>
    <title>Capture And Flag</title>
    <style>
        #image-preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="particles-js"></div>
    <nav class="main-menu">
        <div>
            <div class="user-info">
                <img src="{{ asset('img/sample_placeholder.png') }}" alt="Profile Image">
                <p>Name User</p>
            </div>
            <ul>
                <li class="nav-item ">
                    <a href="#">
                        <i class="fa fa-home nav-icon"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="profile.html">
                        <i class="fa fa-user nav-icon"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-bars nav-icon"></i>
                        <span class="nav-text">Challenges</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="scoreboard.html">
                        <i class="fa fa-trophy nav-icon"></i>
                        <span class="nav-text">Scoreboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <ul>
            <li class="nav-item">
                <a href="Support.html">
                    <i class="fas fa-question-circle nav-icon"></i>
                    <span class="nav-text">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="settings.html">
                    <i class="fa fa-cog nav-icon"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="../index.html">
                    <i class="fa fa-sign-out-alt nav-icon"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="content">
        <div class="inside-content">
            <div class="search-and-check">
                <form class="search-box">
                    <input type="text" placeholder="Search Challenge..." />
                    <i class="bx bx-search"></i>
                </form>
            </div>
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-mono text-success">Welcome hackers! prove the world's most powerful hacking, is here! and prove the world that a computer genius with a laptop is not a nerd sitting in the corner ! join our CTF and expand your knowledge !</div>
            </div>
            <div class="user-form">
                <form id="addUserForm" onsubmit="addUser(event)">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                        <img id="image-preview" src="#" alt="Image Preview" style="display:none;">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image-preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function addUser(event) {
            event.preventDefault();
            // Add your form submission logic here
        }
    </script>
</body>
</html>