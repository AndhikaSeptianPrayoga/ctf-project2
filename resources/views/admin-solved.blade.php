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
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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

            <li class="nav-item  ">
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
  
            <li class="nav-item active">
              <a href="/solved">
                <i class="fa fa-check nav-icon"></i>
                <span class="nav-text">Solved</span>
              </a>
            </li>
            <li class="nav-item activa">
                <a href="/notifications">
                    <i class="fa fa-bell nav-icon"></i>
                    <span class="nav-text">Notifications</span>
                </a>
            </li>
          </ul>
        </div>
  
        <ul>
          <li class="nav-item">
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
            <div class="search-and-check">
                <form class="search-box">
                    <input type="text" id="searchInput" placeholder="Search User..." onkeyup="searchUser()"/>
                    <i class="bx bx-search"></i>
                </form>
            </div>
            <table id="solvedTable" class="table table-striped table-dark table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Username</th>
                        <th scope="col">Challenge</th>
                        <th scope="col">Submitted Flag</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>admin</td>
                        <td>saya ikan</td>
                        <td>owkowkowk</td>
                        <td>2024-06-08 23:31:42</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>admin</td>
                        <td>saya ikan</td>
                        <td>awokdwokdowkdowkdwd</td>
                        <td>2024-06-08 23:31:36</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>admin</td>
                        <td>Kijang Satu</td>
                        <td>CTFinAJA{aman}</td>
                        <td>2024-06-08 23:31:13</td>
                        <td class="text-success">Benar</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>admin</td>
                        <td>Pramuka</td>
                        <td>CTFinAJA{hello}</td>
                        <td>2024-06-08 23:30:32</td>
                        <td class="text-success">Benar</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>IvanBesti</td>
                        <td>Pramuka</td>
                        <td>CTFinAJA{hello}</td>
                        <td>2024-05-17 22:49:24</td>
                        <td class="text-success">Benar</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>IvanBesti</td>
                        <td>Pramuka</td>
                        <td>CTFinAJA{HELLO}</td>
                        <td>2024-05-17 22:48:24</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>a</td>
                        <td>Pramuka</td>
                        <td>242342</td>
                        <td>2024-03-26 03:07:48</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>a</td>
                        <td>Pramuka</td>
                        <td>CTFinAJA{.... ..-...-.. -----}</td>
                        <td>2024-03-26 03:07:43</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>faizal</td>
                        <td>Kijang Satu</td>
                        <td>CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}</td>
                        <td>2024-03-25 13:22:21</td>
                        <td class="text-danger">Salah</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Akbar_Wira</td>
                        <td>saya ikan</td>
                        <td>CTFinAJA{k3l4z_484n6kuh}</td>
                        <td>2024-02-28 13:28:15</td>
                        <td class="text-success">Benar</td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination-section">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item"><a class="page-link" href="#">4</a></li>
                         <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next</a></li>
                    </ul>
                </nav>
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