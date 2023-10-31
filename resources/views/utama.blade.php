<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Biodata - @yield('nama_title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div>
    <h1>@yield('nama_lengkap')</h1>
</div>
<br/>
				<div class='container'>
					<div class='row'>
						<!-- Menampilkan npm. -->
						<div class='col-lg-3'>Nomor Pokok Mahasiswa</div>
						<div class='col-lg-2'>: @yield('npm')</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Status. -->
						<div class='col-lg-3'>Status</div>
						<div class='col-lg-5'>: @yield('status')</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Alamat. -->
						<div class='col-lg-3'>Alamat</div>
						<div class='col-lg-8'>: @yield('alamat')</div>
					</div>
                    <div class='row'>
						<!-- Menampilkan No Hp. -->
						<div class='col-lg-3'>NO HP</div>
						<div class='col-lg-2'>: @yield('noHp')</div>
					</div>
                    <div class='row'>
						<!-- Menampilkan Hobby. -->
						<div class='col-lg-3'>Hobby</div>
                        <div class='col-lg-2'>@yield('hobby')</div>
					</div>
					</div>
			</div>
            <br>
<br>
    @yield('tabel_biodata')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</body>
</html>