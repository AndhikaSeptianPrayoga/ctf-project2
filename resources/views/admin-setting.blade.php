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
    <link rel="stylesheet" href="{{ asset('js/dashboard.js') }}">
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
              <li class="nav-item ">
                <a href="/dashboard">
                  <i class="fa fa-home nav-icon"></i>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin-user">
                  <i class="fa fa-users nav-icon"></i>
                  <span class="nav-text">Users</span>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="/admin-add-challenge">
                  <i class="fa fa-trophy nav-icon"></i>
                  <span class="nav-text">Challenges</span>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="solved">
                  <i class="fa fa-check nav-icon"></i>
                  <span class="nav-text">Solved</span>
                </a>
              </li>
              <li class="nav-item activa">
                <a href="/notif">
                    <i class="fa fa-bell nav-icon"></i>
                    <span class="nav-text">Notifications</span>
                </a>
            </li>
            </ul>
          </div>
    
          <ul>
            <li class="nav-item active">
              <a href="/setting-admin">
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
              <div class="header">
                <picture class="morning-img">
                  <div class="img-container">
                      <div class="profile-pic">
                          <label class="-label" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                          </label>
                          <input id="file" type="file" onchange="loadFile(event)"/>
                          <img class="card-img-top" src="{{ asset('img/faizal.jpeg') }}" alt="Ijel" id="output" width="200">
                        </div>
                        <script>
                          var loadFile = function (event) {
                          var image = document.getElementById("output");
                          image.src = URL.createObjectURL(event.target.files[0]);
                      };
                      </script>
                      <div class="edit-form">  
                          <form id="contact" action="" method="post">
                            <h3>Settings Profile</h3>
                            <fieldset>
                              <h5>Username</h5>
                              <input placeholder="Lorem Ipsum" type="text" tabindex="1">
                            </fieldset>
                            <fieldset>
                              <h5>Email</h5>
                              <input placeholder="loremipsum@gmail.com" type="email" tabindex="2">
                            </fieldset>
                            <fieldset>
                              <h5>Password</h5>
                              <input placeholder="Team Lorem Ipsum" type="tel" tabindex="3">
                            </fieldset>
                            <fieldset>
                              <button name="submit" type="submit" id="contact-submit" data-submit="Edit Profile Saved">Submit Edit</button>
                            </fieldset>
                          </form>
                        </div>
                  </div>
                  
                </picture>
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

