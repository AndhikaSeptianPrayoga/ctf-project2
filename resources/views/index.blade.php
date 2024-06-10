<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Capture The Flag</title>

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
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <h1 class="display-3">CAPTURE THE FLAG<span class="vim-caret">͏͏&nbsp;</span></h1>
              <div class="lead mb-3 text-mono text-success">Welcome hackers! prove the world's most powerful hacking, is here! and prove the world that a computer genius with a laptop is not a nerd sitting in the corner ! join our CTF and expand your knowledge !</div>
              <div class="text-mono">
                <a href="/register"
                  title="Get Started"
                  class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
                  Get Started
                </a>
                <a href="/login"
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
                <p class="section-subtitle">Category</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-laptop-code"></i>Web Exploit</h5>
                    <p class="card-text">Find a vulnerability & exploit</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i>Cryptography</h5>
                    <p class="card-text">Find a Encryption</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-secret"></i>OSINT</h5>
                    <p class="card-text">Find a Information</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-laptop"></i>Programming</h5>
                    <p class="card-text">Problem Solving</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="stats-section">
    <div class="container text-center py-5">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="stat-number">{{ $dashboardData->total_users }}</h2>
                    <p class="stat-label">Total User</p>
                </div>
                <div class="col-md-4">
                    <h2 class="stat-number">{{ $dashboardData->total_solves }}</h2>
                    <p class="stat-label">Total Flags Submitted</p>
                </div>
                <div class="col-md-4">
                    <h2 class="stat-number">{{ $dashboardData->total_challenges }}</h2>
                    <p class="stat-label">Total Challenges</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row py-5">
      <div class="col-12">
        <img src="{{ asset('img/banner.png') }}" alt="Hacking Content" class="img-fluid">
        <h2 class="section-title features-title">Features</h2>
        <p class="section-subtitle">Nikmati beragam fitur menarik yang kami tawarkan untuk meningkatkan pengalaman Capture The Flag Anda.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="challenge-type">
        <div class="features-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path d="M0 0v24h24v-24h-24zm1 1h11v3.55c0 .932.575 1.357 1.109 1.357.332 0 .672-.156.953-.438.284-.296.389-.469.786-.469.47 0 1.152.534 1.152 1.5s-.682 1.5-1.152 1.5c-.396 0-.501-.173-.785-.468-.281-.283-.621-.438-.953-.438-.535-.001-1.11.424-1.11 1.356v3.55h-3.55c-.536 0-.439-.139-.108-.454.262-.245.658-.616.658-1.394 0-1.039-1.004-2.152-2.5-2.152s-2.5 1.113-2.5 2.152c0 .777.396 1.148.658 1.394.333.317.425.454-.108.454h-3.55v-11zm0 22v-10h3.55c.933 0 1.356-.575 1.356-1.109 0-.332-.155-.672-.438-.953-.294-.284-.468-.388-.468-.786 0-.47.534-1.152 1.5-1.152s1.5.682 1.5 1.152c0 .397-.174.501-.469.785-.282.281-.438.621-.438.953.001.535.425 1.11 1.357 1.11h3.55v3.55c0 .535-.137.44-.454.109-.245-.263-.616-.659-1.394-.659-1.039 0-2.152 1.004-2.152 2.5s1.113 2.5 2.152 2.5c.777 0 1.148-.396 1.394-.659.317-.333.454-.424.454.109v2.55h-11zm22 0h-10v-2.55c0-.932-.575-1.357-1.109-1.357-.332 0-.672.156-.953.438-.284.296-.389.469-.786.469-.47 0-1.152-.534-1.152-1.5s.682-1.5 1.152-1.5c.396 0 .501.173.785.468.281.283.621.438.953.438.534 0 1.109-.425 1.109-1.357v-3.549h3.55c.536 0 .439.139.108.454-.261.245-.657.616-.657 1.394 0 1.039 1.004 2.152 2.5 2.152s2.5-1.113 2.5-2.152c0-.777-.396-1.148-.658-1.394-.333-.317-.425-.454.108-.454h2.55v10zm-2.55-11c-.933 0-1.356.575-1.356 1.109 0 .332.155.672.438.953.294.284.468.388.468.786 0 .47-.534 1.152-1.5 1.152s-1.5-.682-1.5-1.152c0-.397.174-.501.469-.785.282-.281.438-.621.438-.953 0-.534-.424-1.109-1.356-1.109h-3.551v-3.551c0-.535.137-.44.454-.109.245.263.616.659 1.394.659 1.039 0 2.152-1.004 2.152-2.5s-1.113-2.5-2.152-2.5c-.777 0-1.148.396-1.394.659-.317.333-.454.424-.454-.109v-3.55h10v11h-2.55z"/></svg>
                </div>
          <h3>Challenges</h3>
          <p>Hadapi tantangan beragam kami untuk mengasah keahlian Anda dalam keamanan cyber</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="challenge-type">
        <div class="features-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M5 9v8h-2v-8h2zm2-2h-6v12h6v-12zm6-4v14h-2v-14h2zm2-2h-6v18h6v-18zm6 13v3h-2v-3h2zm2-2h-6v7h6v-7zm1 9h-24v2h24v-2z"/></svg>
                </div>
          <h3>Leaderboard</h3>
          <p>Lihat peringkat Anda, rasakan semangat persaingan, dan jadilah yang teratas di leaderboard kami!</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="challenge-type">
        <div class="features-icon">
                    <svg width="40" height="40" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m18.891 19.498h-13.782l-1.52-9.501h16.823zm-14.306-12.506h14.868l-.227 1.506h-14.415zm.993-2.494h12.882l-.13.983h-12.623zm16.421 4.998c0-.558-.456-.998-1.001-.998h-.253c.309-2.064.289-1.911.289-2.009 0-.58-.469-1.008-1-1.008h-.189c.193-1.461.187-1.399.187-1.482 0-.671-.575-1.001-1.001-1.001h-14.024c-.536 0-1.001.433-1.001 1 0 .083-.008.013.188 1.483h-.19c-.524 0-1.001.422-1.001 1.007 0 .101-.016-.027.29 2.01h-.291c-.569 0-1.001.464-1.001.999 0 .118-.105-.582 1.694 10.659.077.486.496.842.988.842h14.635c.492 0 .911-.356.988-.842 1.801-11.25 1.693-10.54 1.693-10.66z" fill-rule="nonzero"/></svg>
                </div>
          <h3>Category</h3>
          <p>Dengan kategori yang jelas dan terstruktur, Anda dapat menemukan tantangan sesuai minat dan keahlian Anda.</p>
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
                <p class="section-subtitle">Tim kami terdiri dari para profesional berdedikasi yang menggabungkan kreativitas dan keahlian teknis untuk menghasilkan karya terbaik. Kenali mereka:</p>
              </div>
            </div>
            <div class="row">
              <!-- First Row -->
              <div class="col-md-4">
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
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/Asep.jpg') }}" alt="Asep">
                  <div class="card-body text-center">
                    <h5 class="card-title">Andhika Septian Prayoga</h5>
                    <p class="card-text">Back End Developer</p>
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
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/riza.jpg') }}" alt="Rija">
                  <div class="card-body text-center">
                    <h5 class="card-title">M Riza Buccharelli</h5>
                    <p class="card-text">Full Stack Developer</p>
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
            <div class="row mt-4">
              <!-- Second Row -->
              <div class="col-md-6">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/akbar.jpeg') }}" alt="Abay">
                  <div class="card-body text-center">
                    <h5 class="card-title">Akbar Wira Nugraha</h5>
                    <p class="card-text">Front End Developer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-google"></i></a>
                      <a href="https://instagram.com/akbarwirann"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/akbar-wira-nugraha/"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('img/saeful.jpg') }}" alt="Ipul">
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
            </div>
            
          </div>

          
          <!-- End of Our Team Section -->
          <div class="footer">
</div>

    </div>
</div>

<!-- Footer Section -->
<div class="footer" style=" color: white; padding: 20px; text-align: center; font-size: 16px;">
<p>&copy; 2024 KELOMPOK CTF. All tasks and writeups are copyrighted by their respective authors. <a href="/policy">Privacy Policy.</a></p>
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