<?php
  if (session_status() == PHP_SESSION_NONE) {
     session_start();
}
if (!isset($_SESSION['username']) || $_SESSION['role'] != 0) {
    header('Location: /login');
    exit();
}
?><!DOCTYPE html>
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
    <script defer src="../Js/main.js"></script>
    <title>Capture And Flag</title>
</head>
<body>
  <div id="particles-js"></div>
  <nav class="main-menu">
      <div>
          <div class="user-info">
              <?php if (isset($_SESSION['file'])): ?>
                  <img src="<?php echo asset($_SESSION['file']); ?>" alt="Profile Picture">
              <?php else: ?>
                  <img src="{{ asset('img/default-profile.png') }}" alt="Profile Picture">
              <?php endif; ?>
              <p><?php echo $_SESSION['username'] ?? 'Guest'; ?></p>
          </div>
            <ul>
                <li class="nav-item">
                    <a href="/">
                        <i class="fa fa-home nav-icon"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile">
                        <i class="fa fa-user nav-icon"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/challenge">
                        <i class="fa fa-bars nav-icon"></i>
                        <span class="nav-text">Challenges</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/board">
                        <i class="fa fa-trophy nav-icon"></i>
                        <span class="nav-text">Scoreboard</span>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="/notifications">
                      <i class="fa fa-bell nav-icon"></i>
                      <span class="nav-text">Notifications</span>
                  </a>
              </li>
            </ul>
        </div>

        <ul>
            <li class="nav-item">
                <a href="/support">
                    <i class="fas fa-question-circle nav-icon"></i>
                    <span class="nav-text">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/setting">
                    <i class="fa fa-cog nav-icon"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-link nav-icon">
                      <i class="fa fa-sign-out-alt"></i>
                      <!-- <span class="nav-text">Logout</span> -->
                  </button>
              </form>
          </li>
        </ul>
    </nav>

    <section class="content">
        <div class="inside-content">
            <div class="header">
                <a class="navbar-brand" href="/"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-mono text-success">Relax to answers the chall, We know you can do it !!!</div>
            </div>
            <div class="test-container">
                <div class="card bg-sidebar text-white">
                    <div class="card-body">
                        <h3 class="card-title">{{ $challenge->title }}</h3> <!-- menampilkan title challenge sesuai id_chall -->
                        <p class="card-text">{{ $challenge->category }} | {{ $challenge->poin }} points</p> <!-- menampilkan kategori dan point challenge-->
                        <p class="card-text">{!! $challenge->descript !!}</p> <!-- menampilkan kolom descript dari tabel challenge -->
                        <form action="{{ url('/submit-flag') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="hidden" name="id_chall" value="{{ $challenge->id_chall }}">
        <input type="text" name="user_flag" class="form-control" placeholder="CTFinAJA{*}">
    </div>
    <div class="submit-btn">
        <button type="submit" class="btn btn-success btn-shadow px-5 my-4 ml-0 text-left">SUBMIT</button>
    </div>
</form>
                    </div>
                </div>
                <div class="card bg-sidebar text-white mt-4">
                    <div class="card-body">
                        <h4 class="card-title">Top Speed Solvers</h4>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Challenge</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solvers as $solver)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $solver->username }}</td>
                                    <td>{{ $solver->challenge_title }}</td>
                                    <td>{{ $solver->created_at->format('M/d, H:i:s') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp1YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
