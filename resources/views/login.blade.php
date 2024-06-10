<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Capture The Flag - Login</title>

    <link rel="icon" href="{{ asset('img/CTFicon.jpg') }}" type="image/jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
</head>
<body>

    <div id="particles-js"></div>

    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="/"><span>CTFin</span><span>AJA</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active text-white">Home</a>
                        <a href="/login" class="nav-item nav-link text-white">Notification</a>
                        <a href="/user" class="nav-item nav-link text-white">Users</a>
                        <a href="/scoreboard" class="nav-item nav-link text-white">Scoreboard</a>
                        <a href="/challenge" class="nav-item nav-link text-white">Challenges</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <h1 class="mb-5" style="text-align: center">Before we start HACKING<span class="vim-caret">͏͏&nbsp;&nbsp;</span></h1>
        <div class="row py-4 justify-content-center">
            <div class="col-md-6 glass-effect-login">
                <h4 class="mb-3">Enter your credentials</h4>
                <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password">Password <span class="text-muted"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">#</span>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Make sure nobody's behind you ;)">
                            <div class="invalid-feedback">
                                Please enter a valid password.
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <small class="d-block text-center mt-3">Not a member? <a href="/register">Register</a></small>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-outline-success btn-shadow btn-lg btn-block" type="submit"> Lets Hack! </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp1YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
