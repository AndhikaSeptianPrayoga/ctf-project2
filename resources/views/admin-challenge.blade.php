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
       <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       <script>
           tinymce.init({
               selector: 'textarea#description',
               plugins: 'a11ychecker advcode advlist anchor autolink charmap codesample emoticons link lists media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
               toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
               toolbar_mode: 'floating',
           });
       </script>
       <script defer src="../Js/main.js"></script>
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
                   <i class="fa fa-home
                     nav-icon"></i>
                   <span class="nav-text">Dashboard</span>
                 </a>
               </li>
               
               <li class="nav-item">
                 <a href="/admin-user">
                   <i class="fa fa-users nav-icon"></i>
                   <span class="nav-text">Users</span>
                 </a>

               </li>

               <li class="nav-item active">
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
                       <input type="text" id="searchInput" placeholder="Search challenge..." onkeyup="searchChallenge()"/>
                       <i class="bx bx-search"></i>
                   </form>
               </div>
               <div class="header">
                   <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                   <div class="lead mb-3 text-m  ono text-success">
                       Control List challenges. And here is for the
                       <a href="/admin-add-challenge" title="Get Started" class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">Add challenge</a>
                   </div>
               </div>
               <div class="table-responsive">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>No.</th>
                               <th>Category</th>
                               <th>Flag</th>
                               <th>Point</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody id="challengeTableBody">
                           <!-- challenge rows will be inserted here by JavaScript -->
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
    const challenges = @json($challenges);
    const rowsPerPage = 10;
    let currentPage = 1;

    // Mapping of category IDs to category names
    const categoryMap = {
        1: 'Programming',
        2: 'Web Exploit',
        3: 'Cryptography',
        4: 'OSINT'
    };

    // Function to sort challenges by category name
    function sortChallengesByCategoryName(challenges) {
        return challenges.sort((a, b) => {
            const categoryA = categoryMap[a.id_category].toLowerCase();
            const categoryB = categoryMap[b.id_category].toLowerCase();
            if (categoryA < categoryB) return -1;
            if (categoryA > categoryB) return 1;
            return 0;
        });
    }

    function displayChallenges() {
        const sortedChallenges = sortChallengesByCategoryName(challenges);
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const paginatedChallenges = sortedChallenges.slice(start, end);

        const tableBody = document.getElementById("challengeTableBody");
        tableBody.innerHTML = "";

        for (const [index, challenge] of paginatedChallenges.entries()) {
            const row = `
                <tr>
                    <td>${start + index + 1}</td>
                    <td>${categoryMap[challenge.id_category]}</td>
                    <td>${challenge.flag}</td>
                    <td>${challenge.poin}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
        }

        document.getElementById("page").innerText = currentPage;
        document.getElementById("btnPrev").disabled = currentPage === 1;
        document.getElementById("btnNext").disabled = end >= challenges.length;
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            displayChallenges();
        }
    }

    function nextPage() { 
        if ((currentPage * rowsPerPage) < challenges.length) {
            currentPage++;
            displayChallenges();
        }
    }

    function searchChallenge() {
        const searchInput = document.getElementById("searchInput").value.toLowerCase();
        const filteredChallenges = challenges.filter(challenge =>
            categoryMap[challenge.id_category].toLowerCase().includes(searchInput) ||
            challenge.flag.toLowerCase().includes(searchInput) ||
            challenge.poin.toString().includes(searchInput)
        );

        const tableBody = document.getElementById("challengeTableBody");
        tableBody.innerHTML = "";

        for (const [index, challenge] of filteredChallenges.entries()) {
            const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${categoryMap[challenge.id_category]}</td>
                    <td>${challenge.flag}</td>
                    <td>${challenge.poin}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
        }
    }

    window.onload = function() {
        displayChallenges();
    };
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>