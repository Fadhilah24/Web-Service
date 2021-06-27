<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">

    <title>List Kolam</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">List Kolam</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Nama Kolam</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Tanggal Registrasi</th>
              <th scope="col">Action</th>
			  <th scope="col">Action</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
		   @foreach($registrasi_kolam as $l)   
            <tr scope="row">

              
                  
                      <td>
                        {{ $l->nama_kolam }}
                      </td>
                      <td>{{ $l->lokasi }}</td>
                      <td>
                        {{ $l->tanggal_registrasi }}
                       
                      </td>
                      <td><a href="/kolam/editkolam/{{ $l->id}}">Edit</a></td>
					  <td><a href="/kolam/hapus/{{ $l->id}}">Delete</a></td>
                      <td><a href="#" class="more">Details</a></td>
            
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
  </body>
</html>