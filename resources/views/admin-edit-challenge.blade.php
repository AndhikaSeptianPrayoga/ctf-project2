<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Challenge</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/CTFicon.jpg') }}" type="image/jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-neon-glow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/particles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div id="particles-js"></div>
    <nav class="main-menu">
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
    </nav>
    <section class="content">
        <div class="inside-content">
            <div class="header">
                <a class="navbar-brand" href="#"><span>CTFin</span><span>AJA</span></a>
                <div class="lead mb-3 text-m  ono text-success">
                    Edit Challenge
                </div>
            </div>
            <form id="edit-form" action="/admin-update-challenge/{{ $challenge->id }}" method="POST">

    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category" class="form-control">
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}" {{ $challenge->id_category == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="flag">Flag</label>
        <input type="text" id="flag" name="flag" class="form-control" value="{{ $challenge->flag }}">
    </div>
    <div class="form-group">
        <label for="poin">Point</label>
        <input type="number" id="poin" name="poin" class="form-control" value="{{ $challenge->poin }}">
    </div>
    <button type="submit" class="btn btn-success">Update Challenge</button>
</form>
        </div>
    </section>


    <script>
        // Ambil form pembaruan dari halaman HTML
var editForm = document.getElementById('edit-form');

// Tambahkan event listener untuk mengirim permintaan pembaruan ketika formulir disubmit
editForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan perilaku bawaan formulir (pengiriman langsung)

    // Ambil data dari formulir
    var formData = new FormData(editForm);
    var challengeId = editForm.getAttribute('data-challenge-id');

    // Kirim permintaan PUT menggunakan AJAX
    fetch('/admin-update-challenge/' + challengeId, {
        method: 'PUT',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(function(response) {
        // Periksa apakah respons berhasil (status kode 200)
        if (response.ok) {
            // Jika berhasil, tampilkan pesan sukses
            alert('Challenge updated successfully');
            // Redirect ke halaman lain jika diperlukan
            window.location.href = '/admin-challenge';
        } else {
            // Jika respons tidak berhasil, tangani error
            alert('An error occurred while updating the challenge.');
        }
    })
    .catch(function(error) {
        // Tangani error jika permintaan gagal
        console.error('Error:', error);
        alert('An error occurred while updating the challenge.');
    });
});

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>