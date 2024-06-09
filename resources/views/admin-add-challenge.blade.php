<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PICT - CTF</title>

    <!-- Quill.js -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
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
              <a href="#">
                <i class="fa fa-home nav-icon"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item  ">
              <a href="profile.html">
                <i class="fa fa-users nav-icon"></i>
                <span class="nav-text">Users</span>
              </a>
            </li>
  
            <li class="nav-item active">
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
               <div class="lead mb-3 text-mono text-success">Control List Challenges. And here is for the admin to add new challenges 
                    <a href="#"
                    title="Get Started"
                    class="btn btn-success btn-shadow px-1 my-1 ml-1 text-left">
                    Back to Challenge List
                  </a>
            </div>
            </div>
            
            <div class="container mt-5">
                <h3 class="text-center">Challenges</h3>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category">
                                    <option>OSINT</option>
                                    <option>Web</option>
                                    <option>Forensics</option>
                                    <option>Crypto</option>
                                    <option>Misc</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <div id="editor-container" style="height: 200px;"></div>
                            </div>
                            <div class="form-group">
                                <label for="flag">Flag</label>
                                <input type="text" class="form-control" id="flag" placeholder="Enter flag">
                            </div>
                            <div class="form-group">
                                <label for="points">Points</label>
                                <input type="number" class="form-control" id="points" placeholder="Enter points">
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                                <img id="image-preview" src="#" alt="Image Preview" style="display:none;">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Initialize Quill.js -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                        [{ 'direction': 'rtl' }],                         // text direction
                        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                        [{ 'font': [] }],
                        [{ 'align': [] }],
                        ['clean'],                                         // remove formatting button
                        ['link', 'image', 'video', 'code-block']           // link and image, video
                    ]
                }
            });
        });
    </script>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function addUser(event) {
        event.preventDefault();
        // Add your form submission logic here
    }
</script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>