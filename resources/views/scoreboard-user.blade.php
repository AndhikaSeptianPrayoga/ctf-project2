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
                <a class="navbar-brand" href="/"><span class="text-danger">CTFin</span><span class="text-white">AJA</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="/user" class="nav-item nav-link active text-white">Home</a>
                    <a href="#" class="nav-item nav-link text-white">Notification</a>
                    <a href="/user" class="nav-item nav-link text-white">Users</a>
                    <a href="/scoreboard" class="nav-item nav-link text-white">Scoreboard</a>
                    <a href="/challenge" class="nav-item nav-link text-white">Challenges</a>
                </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-md-9">
            <div class="leaderboard-container">
                <h3 class="text-center mb-4">Leaderboard</h3>
             
   
             
    <table class="table table-dark table-hover" style="width: 100%; min-width: 800px;">
        <colgroup>
            <col style="width: 10%;">
            <col style="width: 40%;">
            <col style="width: 50%;">
        </colgroup>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Username</th>
                <th>Score Point</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rankings as $key => $ranking)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $ranking->username }}</td>
                <td>{{ $ranking->total_points }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>
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