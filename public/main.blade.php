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
    <script defer   src="../Js/main.js"></script>
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
              <li class="nav-item">
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
    
              <li class="nav-item active">
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
                              <div class="lead mb-3 text-mono text-success">Scoreboard Capture And Flag, You are AT the rank 1 !!</div>
            </div>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Leaderboard</title>
                <link rel="stylesheet" href="styles.css">
            </head>
            <body>
                <div class="leaderboard-container">
                    <h2>Leaderboard</h2>
                    <input type="text" id="filterInput" placeholder="Filter by name...">
                    <table id="leaderboardTable">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Name</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- User rows will be populated here by JavaScript -->
                        </tbody>
                    </table>
                    <div class="pagination-container">
                        <button id="prevPage">Previous</button>
                        <span id="currentPage">1</span>
                        <button id="nextPage">Next</button>
                    </div>
                </div>
                <script src="script.js"></script>
            </body>
            </html>
          </div>


        </section</table>>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
      </body>
</html>

