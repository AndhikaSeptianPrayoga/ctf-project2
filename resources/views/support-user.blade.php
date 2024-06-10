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
                <a href="/user">
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
                <a href="challenge">
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
            </ul>
          </div>
    
          <ul>
            <li class="nav-item active">
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
              <a href="/">
                <i class="fa fa-sign-out-alt nav-icon"></i>
                <span class="nav-text">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
    
        <section class="content">
          <div class="inside-content">
            <div class="search-and-check">
          </div>
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                              <div class="lead mb-3 text-mono text-success">Welcome hackers! prove the world's most powerful hacking, is here! and prove the world that a computer genius with a laptop is not a nerd sitting in the corner ! join our CTF and expand your knowledge !</div>
            </div>
            <div class="support">


                <h1 class="faq-container">FAQ - Pertanyaan yang Sering Diajukan</h1>
            
                
                <div id="faq">
                  <details>
                    <summary>Apa itu CTF?</summary>
                    <p>CTF (Capture The Flag) adalah kompetisi keamanan cyber di mana peserta bersaing untuk menyelesaikan tantangan keamanan dan mencari bendera (flag) untuk mendapatkan poin.</p>
                  </details>
                  
                  <details>
                    <summary>Apa manfaat mengikuti CTF?</summary>
                    <p>Mengikuti CTF dapat membantu meningkatkan keterampilan keamanan cyber, memperluas pengetahuan tentang kerentanan sistem, dan mengembangkan kemampuan pemecahan masalah.</p>
                  </details>
                  
                  <details>
                    <summary>Apa itu flag dalam konteks CTF?</summary>
                    <p>Flag dalam konteks CTF adalah tanda atau kode unik yang dipasang dalam tantangan keamanan yang harus ditemukan atau diperoleh oleh peserta untuk mendapatkan poin.</p>
                  </details>
                  
                  <details>
                    <summary>Apa yang membuat CTF menarik?</summary>
                    <p>CTF menarik karena tantangan yang beragam, komunitas yang solid, dan kesempatan untuk terlibat dalam simulasi skenario keamanan nyata.</p>
                  </details>
             </div> 
                    
                                <div class="edit-contact">  
                                    <form id="contact" action="" method="post">
                                      <h1> Send A Massege</h1>
                                      <fieldset>
                                        <h5>Name</h5>
                                        <input placeholder="Lorem Ipsum" type="text" tabindex="1">
                                      </fieldset>
                                      <fieldset>
                                        <h5>Email</h5>
                                        <input placeholder="loremipsum@gmail.com" type="email" tabindex="2">
                                      </fieldset>
                                      <fieldset>
                                        <h5>Phone</h5>
                                        <input placeholder="Team Lorem Ipsum" type="tel" tabindex="3">
                                      </fieldset>
                                      <fieldset>
                                        <h5>SUBJECT</h5>
                                        <textarea placeholder="Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum" tabindex="5"></textarea>
                                      </fieldset>
                                      <fieldset>
                                        <button name="submit" type="submit" id="contact-submit" data-submit="Edit Profile Saved">Submit </button>
                                      </fieldset>
                                    </form>
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

