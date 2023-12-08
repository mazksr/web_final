<php?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <script src="{{ asset('script/script.js') }}"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                    @guest
                        <button onclick="return login()" class="btn btn-outline-dark" type="submit">
                            Login
                        </button>
                        <div style="padding-left: 5px;">
                            <button onclick="return register()" class="btn btn-outline-dark" type="submit">
                                Register
                            </button>
                        </div>
                    @else
                        <button onclick="return viewProfile()" class="btn btn-outline-dark" type="submit">
                            Profile
                        </button>
                    @endguest
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Table Jobs -->
        <div class="jobs-table">
            <table class="table table-striped">
                <thead>
                    <th>Posisi</th>
                    <th>Lokasi</th>
                    <th>Tipe Pekerjaan</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Job Description</th>
                    <th>Gaji</th>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->posisi }}</td>
                        <td>{{ $job->lokasi }}</td>
                        <td>{{ $job->tipe_pekerjaan }}</td>
                        <td>{{ $job->email }}</td>
                        <td>{{ $job->nomor_telp }}</td>
                        <td>{{ $job->job_desc }}</td>
                        <td>{{ $job->gaji }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </body>
</html>
