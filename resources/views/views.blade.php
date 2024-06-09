<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Challenge Solutions</title>

    <link rel="icon" href="{{ asset('img/CTFicon.jpg') }}" type="image/jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">User Challenge Solutions</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Challenge ID</th>
                        <th>Challenge Title</th>
                        <th>Solve Date</th>
                        <th>Challenge Points</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($solutions as $solution)
                    <tr>
                        <td>{{ $solution->id_user }}</td>
                        <td>{{ $solution->username }}</td>
                        <td>{{ $solution->id_chall }}</td>
                        <td>{{ $solution->challenge_title }}</td>
                        <td>{{ $solution->solve_date }}</td>
                        <td>{{ $solution->challenge_points }}</td>
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
