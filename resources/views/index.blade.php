<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Capture The Flag</title>

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
        <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active text-white">Home</a>
              <a href="#" class="nav-item nav-link text-white">Notification</a>
              <a href="#" class="nav-item nav-link text-white">Users</a>
              <a href="#" class="nav-item nav-link text-white">Scoreboard</a>
              <a href="#" class="nav-item nav-link text-white">Challenges</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <h1 class="display-3">CAPTURE AND FLAG<span class="vim-caret">͏͏&nbsp;</span></h1>
              <div class="lead mb-3 text-mono text-success">Welcome hackers! prove the world's most powerful hacking, is here! and prove the world that a computer genius with a laptop is not a nerd sitting in the corner ! join our CTF and expand your knowledge !</div>
              <div class="text-mono">
                <a href="#"
                  title="Get Started"
                  class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
                  Get Started
                </a>
                <a href="#"
                  class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
                  Re-Join
                </a>
              </div>
            </div>
            <div class="col-xl-6">
              <img class="canvas_img" src="{{ asset('img/canvas.png') }}" alt="">
            </div>
          </div>
          <div class="container py-5">
          <div class="row text-center">
              <div class="col-12">
                <h2 class="section-title">Challenges</h2>
                <p class="section-subtitle">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-laptop-code"></i> Binary</h5>
                    <p class="card-text">Binary adalah salah satu challenge yang diberikan oleh tim CTF.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i> Pramuka</h5>
                    <p class="card-text">Pramuka adalah salah satu challenge yang diberikan oleh tim CTF.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-secret"></i> Melacak Hackers</h5>
                    <p class="card-text">Melacak Hackers adalah salah satu challenge yang diberikan oleh tim CTF.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-laptop"></i> Kijang satu</h5>
                    <p class="card-text">Kijang satu adalah salah satu challenge yang diberikan oleh tim CTF.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="stats-section">
  <div class="container text-center py-5">
    <div class="row">
      <div class="col-md-4">
        <h2 class="stat-number">302,493</h2>
        <p class="stat-label">Flags Submitted</p>
      </div>
      <div class="col-md-4">
        <h2 class="stat-number">715</h2>
        <p class="stat-label">CTFs Hosted</p>
      </div>
      <div class="col-md-4">
        <h2 class="stat-number">64,282</h2>
        <p class="stat-label">Teams Competed</p>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-12">
        <img src="{{ asset('img/sample_placeholder.png') }}" alt="Hacking Content" class="img-fluid">
        <h2 class="section-title">World-Class Hacking Content</h2>
        <p class="section-subtitle">Covering all challenge categories and difficulty levels with the latest and must-known attack paths and exploit techniques.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="challenge-type">
          <h3>Full Pwn-Style</h3>
          <p>Boot2Root machines, custom to your needs, with diverse difficulty, attack paths, and OSes. Players will need to find the user and root flag. Get ready for action!</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="challenge-type">
          <h3>AD-Style</h3>
          <p>Active Directory labs simulating real-world enterprise environments with the latest attack techniques. Try to capture all the flags and reach Domain Admin.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="challenge-type">
          <h3>Jeopardy-Style</h3>
          <p>All challenge types are included in this category. Pick the ones that best fit your company's CTF requirements. From reversing and web to pwn and hardware.</p>
        </div>
      </div>
    </div>
  </div>
</div>
          <!-- Our Team Section -->
          <div class="container py-5">
            <div class="row text-center">
              <div class="col-12">
                <h2 class="section-title">Our Team</h2>
                <p class="section-subtitle">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/faizal.jpeg') }}" alt="Ijel">
                  <div class="card-body text-center">
                    <h5 class="card-title">Faizal Azzriel Gibar</h5>
                    <p class="card-text">Front End Developer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/Asep.jpg') }}" alt="Asep">
                  <div class="card-body text-center">
                    <h5 class="card-title">Andhika Septian Prayoga</h5>
                    <p class="card-text">Fullstack Developer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/sample_placeholder.png') }}" alt="Rija">
                  <div class="card-body text-center">
                    <h5 class="card-title">M Riza Buccharelli</h5>
                    <p class="card-text">UI/UX Designer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/sample_placeholder.png') }}" alt="Abay">
                  <div class="card-body text-center">
                    <h5 class="card-title">Akbar Wira Nugraha</h5>
                    <p class="card-text">Back end Developer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/sample_placeholder.png') }}" alt="Ipul">
                  <div class="card-body text-center">
                    <h5 class="card-title">Saeful Rizal</h5>
                    <p class="card-text">Database Engineer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Our Team Section -->

          <div class="footer">
            <div class="row justify-content-center" style="text-align: center">
              <div class="col">
                <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
              </div>
              <div class="col">
                <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
              </div>
            </div>
<!-- Footer Section -->
<div class="footer" style=" color: white; padding: 20px; text-align: center; font-size: 16px;">
  <p>&copy; 2024 KELOMPOK CTF. Semua Hak Dilindungi.</p>
  <div class="social-icons">
    <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-twitter"></i></a>
    <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-facebook-f"></i></a>
    <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
    <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-linkedin"></i></a>
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