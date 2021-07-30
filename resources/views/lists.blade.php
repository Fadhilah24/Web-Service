<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
	<link rel="stylesheet" href="../css2/style.css">
	<link rel="stylesheet" href="../fonts2/icomoon/style.css">

    <link rel="stylesheet" href="../css2/owl.carousel.min.css">
    
    <link rel="stylesheet" href="../css2/bootstrap.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../css/style.css">
	
    <title>List Kolam</title>
  </head>
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="#" class="text-black"><span class="text-primary">J-Farm</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/restapi/public/kolam/daftar" class="nav-link">List Kolam</a></li>
				 @if($role == 2)
                  <li><a href="/restapi/public/regus" class="nav-link">Registrasi User</a></li>
				
                  <li>
                    <a href="/restapi/public/kolam/input" class="nav-link">Registrasi Kolam</a>
                    
                  </li>
				@endif
                 
                  <li><a href="/restapi/public/logout" class="nav-link" onclick="return confirm('apakah ingin logout ?');">Logout</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">List Kolam</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">ID Kolam</th>
              <th scope="col">Nama Kolam</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Tanggal Registrasi</th>
              
              <!--<th scope="col">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Action</th>-->
             
              <th scope="col"></th>
			 
            </tr>
          </thead>
          <tbody>
		  
		   @foreach($registrasi_kolam as $l)   
            <tr scope="row">

				<td>
                        {{ $l->id }}
                      </td>
                  
                      <td>
                        {{ $l->nama_kolam }}
                      </td>
                      <td>{{ $l->lokasi }}</td>
                      <td>
                        {{ $l->tanggal_registrasi }}
                       
                      </td>
					  @if($role == 2)
                      <td><a href="/restapi/public/kolam/editkolam1/{{ $l->id}}">Edit</a></td>
					  <td><a href="/restapi/public/kolam/hapus/{{ $l->id}}" onclick="return confirm('apakah ingin menghapus kolam ?');">Delete</a></td>
					  @endif
                      <td><a href="/restapi/public/sensor/sensorkolam/{{ $l->id}}" class="more">Details</a></td>
            
            </tr>
	@endforeach
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
	<script src="../js2/jquery-3.3.1.min.js"></script>
    <script src="../js2/popper.min.js"></script>
    <script src="../js2/bootstrap.min.js"></script>
    <script src="../js2/jquery.sticky.js"></script>
    <script src="../js2/main.js"></script>
  </body>
</html>