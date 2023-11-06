<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<style>
.header-basic {
	background-color: #292c2f;
	box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
	padding: 20px 40px;
	height: 80px;
	box-sizing: border-box;
}

.header-basic .header-limiter {
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/* Logo */

.header-basic .header-limiter h1 {
	float: left;
	font: normal 28px Cookie, Arial, Helvetica, sans-serif;
	line-height: 40px;
	margin: 0;
}

.header-basic .header-limiter h1 span {
	color: #5383d3;
}

/* The header links */

.header-basic .header-limiter a {
	color: #ffffff;
	text-decoration: none;
}

.header-basic .header-limiter nav{
	font:16px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: right;
}

.header-basic .header-limiter nav a{
	display: inline-block;
	padding: 0 5px;
	text-decoration:none;
	color: #ffffff;
	font-size: 16px;
	opacity: 0.9;
}

.header-basic .header-limiter nav a:hover{
	opacity: 1;
}

.header-basic .header-limiter nav a.selected {
	color: #608bd2;
	pointer-events: none;
	opacity: 1;
}

/* Making the header responsive */

@media all and (max-width: 600px) {

	.header-basic {
		padding: 20px 0;
		height: 75px;
	}

	.header-basic .header-limiter h1 {
		float: none;
		margin: -8px 0 10px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-basic .header-limiter nav {
		line-height: 1;
		float:none;
	}

	.header-basic .header-limiter nav a {
		font-size: 13px;
	}

}
</style>
</head>
<body>
    <header class="header-basic">

        <div class="header-limiter">

            <h1><a href="#">SKA<span>LIB</span></a></h1>

            <nav>
                <a href="#" class="selected">Data</a>
                <a href="https://smkn2semarang.sch.id/">Blog</a>
                <a href="https://smkn2semarang.sch.id/read/2/profil">About</a>
            </nav>
        </div>

    </header>

    <form action="/buku/{{ $id }}" method="POST">
        @csrf
        @method('PUT')

    
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input value="{{$buku->judul}}"type="text" class="form-control" name='judul' id="judul" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input value="{{$buku->kode}}" type="text" class="form-control" name='kode' id="kode" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input value="{{$buku->penulis}}" type="text" class="form-control" name='penulis' id="penulis" required>
                </div>
            </div>

<div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input value="{{$buku->kategori}}" type="text" class="form-control" name='kategori' id="kategori" required>
                </div>
            </div>

<div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input value="{{$buku->penerbit}}" type="text" class="form-control" name='penerbit' id="penerbit" required>
                </div>
            </div>

<div class="mb-3 row">
                <label for="jml_halaman" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                <div class="col-sm-10">
                    <input value="{{$buku->jml_halaman}}"type="text" class="form-control" name='jml_halaman' id="jml_halaman" required>
                </div>
            </div>

<div class="mb-3 row">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input value="{{$buku->tahun_terbit}}"type="text" class="form-control" name='tahun_terbit' id="tahun_terbit" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tahun_terbit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    
                        <a href='/buku' class="btn btn-primary">KEMBALI</a>
                      
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
   
    </form>
</body>
</html> 
