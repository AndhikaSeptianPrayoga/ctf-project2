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
              <li class="nav-item active">
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
                <a href="admin-challenge">
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
              <li class="nav-item ">
                <a href="/notifications">
                    <i class="fa fa-bell nav-icon"></i>
                    <span class="nav-text">Notifications</span>
                </a>
            </li>
            </ul>
        </div>
            </ul>
          </div>

          <ul>
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
            <div class="header">
              <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
              <div class="lead mb-3 text-mono text-success">You are Login As Admin Dont tell Anyone You Are Control THE CTFINAJA</div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Overview</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item"><i class="fas fa-users"></i> Total Users: 13</li>
                      <li class="list-group-item"><i class="fas fa-trophy"></i> Total Challenges: 5</li>
                      <li class="list-group-item"><i class="fas fa-bell"></i> Total Notifications: 1</li>
                      <li class="list-group-item"><i class="fas fa-check"></i> Total Solves: 156</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>

            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Users Chart</h5>
                  </div>
                  <div class="card-body">
                    <canvas id="users-chart" width="400" height="200"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Recent Solved Challenges</h5>
                  </div>
                    <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item"><i class="fa fa-check"></i> Challenge 1 - Solved by User 1</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Challenge 2 - Solved by User 2</li>
                      <li class="list-group-item"><i class="fa fa-check"></i> Challenge 3 - Solved by User 3</li>
                    </ul>
                    </div>
                </div>
              </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>User Information</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>User 1</td>
                          <td>user1@example.com</td>
                          <td>Admin</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>User 2</td>
                          <td>user2@example.com</td>
                          <td>User</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>User 3</td>
                          <td>user3@example.com</td>
                          <td>User</td>
                        </tr>
                        <!-- Add more table rows here -->
                      </tbody>
                    </table>
                  </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
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

        </div>
    </div>