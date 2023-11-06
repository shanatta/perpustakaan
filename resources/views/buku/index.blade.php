<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKALIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    .opsi {
    display: flex;
}
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
  <body class="bg-light">
    <main class="container">
       
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

		<!-- The content of your page would go here. -->


		

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" disabled value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit" disabled>Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='/buku/create' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-3">Judul</th>
                            <th class="col-md-2">Penulis</th>
                            <th class="col-md-2">Kategori</th>
                            <th class="col-md-2">Jumlah Halaman</th>
                            <th class="col-md-2">Opsi</th>
			    
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($buku as $buk)
                    <tbody>
                        <tr>
                <td>{{ $no++ }}</td>
                <td><a href="/buku/{{ $buk->id }}">{{ $buk->judul}}</a></td>
                <td>{{ $buk->penulis }}</td>
                <td>{{ $buk->kategori }}</td>
                <td>{{ $buk->jml_halaman }}</td>
	
                <td class="opsi"><a class="btn p-0 text-primary" href="/buku/{{ $buk->id }}/edit">Edit</a> <p class="px-2">|</p>
                    <form action ="/buku/{{ $buk->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                    
                        <button class="btn p-0 text-primary" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <tbody>
        @endforeach

    </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>