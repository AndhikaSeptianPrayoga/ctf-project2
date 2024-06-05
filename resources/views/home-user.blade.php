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
              <li class="nav-item active">
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
    
            <div class="upcoming-challanges">
              <h1>POPULAR CHALLANGE</h1>
              <div class="challange-container">
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                    <p>30 Points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Basic Injection</h2>
                    <p>Web || intelagent</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">51241 solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                    <p>10 Points</p>
                    <i class="bx bxs-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Practice Flag</h2>
                    <p>Miscellaneous || intelagent</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">5024 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                    <p>30 Points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Forensics 101</h2>
                    <p>forensics || intelagent</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">5322 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                    <p>20 Points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Character Encoding</h2>
                    <p>Cryptography || dknj11902</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">1241 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">

                    <p>10 points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Taking LS</h2>
                    <p>forensics || alexkato29</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">1241 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">

                    <p>20 points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Base 2 2 the 6</h2>
                    <p>Cryptography || pedro Contipelli</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">1241 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">

                    <p>20 points </p>
                    <i class="bx bxs-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Morse Code</h2>
                    <p>Cryptography || yakatoi </p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">1235 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
    
                <div class="card challange-card">
                  <div class="challange-header">
                    <img src="{{ asset('img/sample_placeholder.png') }}" alt="">
                    <p>30 points</p>
                    <i class="bx bx-heart like-btn"></i>
                  </div>
                  <div class="challange-content">
                    <h2>Reverse Polarity</h2>
                    <p>Cryptography || aglickman</p>
                  </div>
                  <div class="challange-footer">
                    <p style="background-color: #b31a4d">2342 Solves</p>
                    <div class="text-mono">
                        <a href="#"
                          title="Get Started"
                          class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                          Get Started
                        </a>
                      </div>
                  </div>
                </div>
              </div>
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

