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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
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
                <span class="nav-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item active ">
              <a href="profile.html">
                <i class="fa fa-users nav-icon"></i>
                <span class="nav-text">Users</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a href="#">
                <i class="fa fa-trophy nav-icon"></i>
                <span class="nav-text">Challenges</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a href="scoreboard.html">
                <i class="fa fa-check nav-icon"></i>
                <span class="nav-text">Solved</span>
              </a>
            </li>
          </ul>
        </div>
  
        <ul>
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
                    <input type="text" id="searchInput" placeholder="Search User..." onkeyup="searchUser()"/>
                    <i class="bx bx-search"></i>
                </form>
            </div>
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-mono text-success">Control List users. And here is for the 
                    <a href="#"
                    title="Get Started"
                    class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                    Add User
                  </a>
            </div>
            </div>
            <div class="table-responsive">
                <div class="container mt-5">
                    <h1 class="mb-4">Manage Challenges</h1>
            
                    <form id="addChallengeForm" onsubmit="addChallenge(event)">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        <div class="form-group">
                            <label for="flag">Flag</label>
                            <input type="text" class="form-control" id="flag" name="flag" required>
                        </div>
                        <div class="form-group">
                            <label for="points">Points</label>
                            <input type="number" class="form-control" id="points" name="points" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            
                    <h2 class="mt-5">Challenges List</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Flag</th>
                                <th>Points</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="challengeTableBody"></tbody>
                    </table>
                </div>
    </section>


    <script>
        let challenges = [];
        let currentEditIndex = -1;

        function displayChallenges() {
            const tableBody = document.getElementById("challengeTableBody");
            tableBody.innerHTML = "";

            challenges.forEach((challenge, index) => {
                const row = `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${challenge.title}</td>
                        <td>${challenge.category}</td>
                        <td>${challenge.flag}</td>
                        <td>${challenge.points}</td>
                        <td>
                            <button class="btn btn-warning" onclick="editChallenge(${index})">Edit</button>
                            <button class="btn btn-danger" onclick="deleteChallenge(${index})">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        }

        function addChallenge(event) {
            event.preventDefault();
            const title = document.getElementById("title").value;
            const category = document.getElementById("category").value;
            const flag = document.getElementById("flag").value;
            const points = document.getElementById("points").value;

            if (currentEditIndex === -1) {
                const newChallenge = { title, category, flag, points };
                challenges.push(newChallenge);
            } else {
                challenges[currentEditIndex] = { title, category, flag, points };
                currentEditIndex = -1;
            }

            displayChallenges();
            document.getElementById("addChallengeForm").reset();
        }

        function editChallenge(index) {
            currentEditIndex = index;
            const challenge = challenges[index];

            document.getElementById("title").value = challenge.title;
            document.getElementById("category").value = challenge.category;
            document.getElementById("flag").value = challenge.flag;
            document.getElementById("points").value = challenge.points;
        }

        function deleteChallenge(index) {
            challenges.splice(index, 1);
            displayChallenges();
        }

        displayChallenges();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
