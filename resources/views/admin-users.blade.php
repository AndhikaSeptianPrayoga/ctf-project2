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
              <a href="/admin-challenge">
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
                    <a href="/admin-add-user"
                    title="Get Started"
                    class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                    Add User
                  </a>
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
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- User rows will be inserted here by JavaScript -->
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
        const users = [
            { no: 1, username: "FaizalAG", email: "faizalazzriel@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 2, username: "admin", email: "admin@ctf.akbarwirian.my.id",   role: "Admin", hapus: "Hapus" },
            { no: 3, username: "Akbar_Wira", email: "akbarwiranugraha@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 4, username: "Dhika", email: "a@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 5, username: "andhika", email: "andhikapangestu6@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 6, username: "BentarCr00s", email: "bentar.croos@upi.edu",   role: "Users", hapus: "Hapus" },
            { no: 7, username: "a", email: "a@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 8, username: "Riza", email: "rizlli@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 9, username: "rizaa", email: "rizlildsd@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 10, username: "faizal", email: "faizalazzriel@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 11, username: "JohnDoe", email: "john.doe@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 12, username: "JaneSmith", email: "jane.smith@gmail.com",   role: "Users", hapus: "Hapus" },
            { no: 13, username: "User123", email: "user123@gmail.com",   role: "Users", hapus: "Hapus" }
        ];
        const rowsPerPage = 10;
        let currentPage = 1;

        function displayUsers() {
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedUsers = users.slice(start, end);

            const tableBody = document.getElementById("userTableBody");
            tableBody.innerHTML = "";

            for (const user of paginatedUsers) {
                const row = `
                    <tr>
                        <td>${user.no}</td>
                        <td>${user.username}</td>
                        <td>${user.email}</td>

                        <td>${user.role}</td>
                        <td><button class="btn btn-danger">${user.hapus}</button></td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            }

            document.getElementById("page").innerText = currentPage;
            document.getElementById("btnPrev").disabled = currentPage === 1;
            document.getElementById("btnNext").disabled = end >= users.length;
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                displayUsers();
            }
        }

        function nextPage() {
            if ((currentPage * rowsPerPage) < users.length) {
                currentPage++;
                displayUsers();
            }
        }

        function searchUser() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const filteredUsers = users.filter(user =>
                user.username.toLowerCase().includes(searchInput) || 
                user.email.toLowerCase().includes(searchInput)
            );

            const tableBody = document.getElementById("userTableBody");
            tableBody.innerHTML = "";

            for (const user of filteredUsers) {
                const row = `
                    <tr>
                        <td>${user.no}</td>
                        <td>${user.username}</td>
                        <td>${user.email}</td>
                          <td>${user.role}</td>
                        <td><button class="btn btn-danger">${user.hapus}</button></td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            }
        }

        window.onload = function() {
            displayUsers();
        };
    </script>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
