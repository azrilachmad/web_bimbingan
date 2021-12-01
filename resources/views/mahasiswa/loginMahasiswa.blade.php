<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Web Bimbingan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container ">
            <a class="navbar-brand" href="#">Web Bimbingan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container mb-4">
            <h1>
                <center>Login Mahasiswa</center>
            </h1>
        </div>

        <div class="container mt-4">
            <div class="card border bg-light" style="width: 40rem;">
                <div class="card-body">
                    <form action="/action_page.php">
                        <div class="mb-3 mt-3">
                            <label for="npm" class="form-label">Username :</label>
                            <input type="npm" class="form-control" id="npm" placeholder="Input NPM" name="npm">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="pswd">
                        </div>
                        <a class="btn btn-primary" href="/dashboardMahasiswa" role="button">Login</a>
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

                        <a href="/registerMahasiswa" class="btn btn-link">Belum Punya Akun?</a>
                    </form>
                </div>



            </div>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
