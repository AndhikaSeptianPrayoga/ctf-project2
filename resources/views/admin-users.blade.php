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

            <li class="nav-item active ">
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
              <a href="/solved">
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
        <div class="header">
            <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
            <div class="lead mb-3 text-mono text-success">Control List users. And here is for the 
                <a href="/admin-add-user" title="Get Started" class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">Add User</a>
            </div>
        </div>
        <div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Ban/Unban</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->role == 1)
                        Admin
                    @else
                        User
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.edit.user', $user->id_user) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                    @if($user->banned)
                        <form action="{{ route('admin.unban.user', $user->id_user) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Unban</button>
                        </form>
                    @else
                        <form action="{{ route('admin.ban.user', $user->id_user) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Ban</button>
                        </form>
                    @endif
                </td>
                <td>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        <div class="pagination">
            <button onclick="prevPage()" id="btnPrev">Previous</button>
            Page: <span id="page"></span>
            <button onclick="nextPage()" id="btnNext">Next</button>
        </div>
    </div>
</section>

    <script>
        
     
function searchUser() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; 
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


var currentPage = 1;
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        updatePage();
    }
}
function nextPage() {
    var maxPage = getMaxPage();
    if (currentPage < maxPage) {
        currentPage++;
        updatePage();
    }
}
function getMaxPage() {
    var table = document.querySelector(".table");
    var rows = table.rows.length - 1; 
    var rowsPerPage = 10; 
    return Math.ceil(rows / rowsPerPage);
}
function updatePage() {
    document.getElementById("page").innerText = currentPage;
    var table = document.querySelector(".table");
    var rows = table.rows;
    var rowsPerPage = 10;
    var start = (currentPage - 1) * rowsPerPage;
    var end = start + rowsPerPage;
    for (var i = 1; i < rows.length; i++) { 
        if (i >= start && i < end) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

window.onload = function() {
    updatePage();
};
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{ asset('js/particles.js
