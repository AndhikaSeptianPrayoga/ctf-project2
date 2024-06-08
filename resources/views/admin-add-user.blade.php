<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

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
            <div class="user-form">
                <form id="addUserForm" onsubmit="addUser(event)">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="team">Team</label>
                        <input type="text" class="form-control" id="team" name="team">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br>
                    <br>

                    

                </form>
            </div>
            <div class="user-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Team</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Banned</th>
                            <th>Admin</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody"></tbody>
                </table>
                <div class="pagination">
                    <button id="btnPrev" onclick="prevPage()">Previous</button>
                    <span id="page"></span>
                    <button id="btnNext" onclick="nextPage()">Next</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        let users = [
            { no: 1, username: "FaizalAG", email: "faizalazzzriel@gmail.com", team: "-", role: "Users", status: "Aktif", banned: "Banned", admin: "Adminkan", hapus: "Hapus" },
            // Add other users here
        ];
        let currentPage = 1;
        const rowsPerPage = 10;

        function displayUsers() {
            const tableBody = document.getElementById("userTableBody");
            tableBody.innerHTML = "";
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedUsers = users.slice(start, end);

            for (const user of paginatedUsers) {
                const row = `
                    <tr>
                        <td>${user.no}</td>
                        <td>${user.username}</td>
                        <td>${user.email}</td>
                        <td>${user.team}</td>
                        <td>${user.role}</td>
                        <td>${user.status}</td>
                        <td><button class="btn btn-danger">${user.banned}</button></td>
                        <td><button class="btn btn-success">${user.admin}</button></td>
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
                        <td>${user.team}</td>
                        <td>${user.role}</td>
                        <td>${user.status}</td>
                        <td><button class="btn btn-danger">${user.banned}</button></td>
                        <td><button class="btn btn-success">${user.admin}</button></td>
                        <td><button class="btn btn-danger">${user.hapus}</button></td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            }
        }

        document.getElementById("searchInput").addEventListener("input", searchUser);

        function addUser(event) {
            event.preventDefault();
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const email = document.getElementById("email").value;
            const team = document.getElementById("team").value;
            const role = document.getElementById("role").value;
            const image = document.getElementById("image").files[0];

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const newUser = {
                    no: users.length + 1,
                    username,
                    email,
                    team,
                    role,
                    status: "Aktif",
                    banned: "Banned",
                    admin: "Adminkan",
                    hapus: "Hapus",
                    image: e.target.result
                };

                users.push(newUser);
                displayUsers();
            };
            reader.readAsDataURL(image);

            document.getElementById("addUserForm").reset();
        }

        displayUsers();
    </script>
</body>
</html>
