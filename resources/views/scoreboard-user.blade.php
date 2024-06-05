<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <style>
        .bg-sidebar {
            background-color: #1c1c1c; /* Sesuaikan dengan warna sidebar */
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><span class="text-danger">CTFin</span><span class="text-white">AJA</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 navbar-search-input" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="btn navbar-search-button my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar bg-sidebar">
                    <div class="user-info text-center">
                        <img src="{{ asset('img/sample_placeholder.png') }}" alt="User Image" class="img-fluid rounded-circle">
                        <h4 class="mt-2">Name User</h4>
                    </div>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Scoreboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-9">
            <div class="leaderboard-container">
                <h3 class="text-center mb-4">Leaderboard</h3>
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Username</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data statis, ganti dengan data dinamis sesuai dengan backend -->
                            <tr>
                                <td>1</td>
                                <td>user123</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>user456</td>
                                <td>1450</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>user789</td>
                                <td>1400</td>
                            </tr>
                            <!-- Akhir dari contoh data -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>