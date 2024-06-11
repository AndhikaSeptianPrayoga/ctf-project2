<?php
  if (session_status() == PHP_SESSION_NONE) {
     session_start();
  }

  if (!isset($_SESSION['username']) || $_SESSION['role'] != 0) {
    header('Location: /login');
    exit();
  }

  // Database connection
  $conn = new mysqli('127.0.0.1', 'root', '', 'ctfinaja');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Fetch user details
  $username = $conn->real_escape_string($_SESSION['username']);
  $sql = "SELECT email, poin FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result) {
    if ($result->num_rows > 0) {
      // Store user details in session
      $row = $result->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      $_SESSION['poin'] = $row['poin'];
    } else {
      $_SESSION['email'] = 'Not provided';
      $_SESSION['poin'] = '0';
    }
  } else {
    // Handle query error
    echo "Error: " . $conn->error;
    $_SESSION['email'] = 'Not provided';
    $_SESSION['poin'] = '0';
  }



  $conn->close();
?>
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
              <li class="nav-item ">
                <a href="user">
                  <i class="fa fa-home nav-icon"></i>
                  <span class="nav-text">Home</span>
                </a>
              </li>

              <li class="nav-item active">
                <a href="profile">
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
    
            <li class="nav-item">
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
            <div class="search-and-check">
                <i class="bx bx-search"></i>
          </div>
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                              <div class="lead mb-3 text-mono text-success">Welcome hackers! prove the world's most powerful hacking, is here! and prove the world that a computer genius with a laptop is not a nerd sitting in the corner ! join our CTF and expand your knowledge !</div>
            </div>
            <section class="profile-section">
    <div class="profile-header">
        <div class="profile-picture">
            <?php if (isset($_SESSION['file'])): ?>
                <img src="<?php echo asset($_SESSION['file']); ?>" alt="Profile Picture">
            <?php else: ?>
                <img src="{{ asset('img/default-profile.png') }}" alt="Profile Picture">
            <?php endif; ?>
        </div>
        <div class="profile-info">
            <p><strong>Name :</strong> <?php echo $_SESSION['username'] ?? 'Guest'; ?></p>
            <p><strong>Email :</strong> <?php echo $_SESSION['email'] ?? 'Not provided'; ?></p>
            <p><strong>Total Score :</strong> <?php echo $_SESSION['poin'] ?? '0'; ?></p>
        </div>
    </div>
</section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
      </body>
</html>
