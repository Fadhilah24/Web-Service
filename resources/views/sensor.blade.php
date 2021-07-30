<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css2/style.css">
	<link rel="stylesheet" href="../../fonts2/icomoon/style.css">

    <link rel="stylesheet" href="../../css2/owl.carousel.min.css">
    
    <link rel="stylesheet" href="../../css2/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../../css/style.css">
	<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
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
                <li class="has-children">
                    <a href="#about-section" class="nav-link">Kelola Ikan</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="/restapi/public/sensor/sensorkolam/kolam/infoikan/{{ $idkolam}}" class="more">Info Jenis Ikan</a></li>
                      @if($role == 2)
                      <li><a href="/restapi/public/sensor/sensorkolam/kolam/tambahikanform/{{ $idkolam}}" class="more">Tambah Jenis Ikan</a></li>
                      @endif
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#about-section" class="nav-link">Chart</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="/restapi/public/sensor/sensorkolam1/chart/{{ $idkolam}}" class="more">Chart ph</a></li>
                      <li><a href="/restapi/public/sensor/sensorkolam1/chartdo/{{ $idkolam}}" class="more">Chart DO</a></li>
                      <li><a href="/restapi/public/sensor/sensorkolam1/chartsuhu/{{ $idkolam}}" class="more">Chart Suhu</a></li>
                    </ul>
                  </li>
                  <li><a href="/restapi/public/logout" class="nav-link">Logout</a></li>
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
      <h2 class="mb-5">Data Sensor</h2>
      

      <div class="table-responsive">
        <input type="text" id="from-datepicker" placeholder="Pilih Bulan" autocomplete="off"> <input type="submit" id="formsensor" value="OK">
        <input type="text" id="from-datepicker2" placeholder="Pilih Tanggal" autocomplete="off"> <input type="submit" id="formsensor2" value="OK">
                    
                    
                    
                    
                    
                   
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col"><a href="/restapi/public/sensor/sensorkolam/sensorph/{{ $idkolam}}">ph</a></th>
              <th scope="col"><a href="/restapi/public/sensor/sensorkolam/sensordo/{{ $idkolam}}">Do</a></th>
              <th scope="col"><a href="/restapi/public/sensor/sensorkolam/sensorsuhu/{{ $idkolam}}">Suhu</a></th>
               <th scope="col">Waktu</th>
               
			   
				  
            </tr>
          </thead>
          <tbody id="forTable">
          
           </tbody>
        </table>
      </div>


    </div>

  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
	<script src="../../js2/jquery-3.3.1.min.js"></script>
    <script src="../../js2/popper.min.js"></script>
    <script src="../../js2/bootstrap.min.js"></script>
    <script src="../../js2/jquery.sticky.js"></script>
    <script src="../../js2/main.js"></script>
    
      
    <!--<script src="../../js/jquery-3.3.1.min.js"></script>-->
    
	<!--<script src="../../js2/jquery-3.3.1.min.js"></script>-->
    
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
    
    <script>
    $( document ).ready(function() {
     $("#from-datepicker").datepicker({ dateFormat: 'yy-mm' }).val();
     $("#from-datepicker2").datepicker({ dateFormat: 'yy-mm-dd' }).val();
     //var date= $('#from-datepicker').val();
     //alert(date);
    });
    
    </script>
   
    <script>
    function create_table(data2)
    {
        
        var data1 = data2[0]['ph'];
        console.log(data1);
        var eTable="<tr scope='row'>";
        
        for(var i=0; i<data2.length;i++)
        {
        var databel = data2[i]['created_at'];
        var d = new Date(databel);     
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        var dt = $("#from-datepicker").val().toString();
        var d1 = new Date(dt);
        var day1 = d1.getDate();
        var month1 = d1.getMonth();
        var year1 = d1.getFullYear();
        //console.log(day);
        //console.log(day1);
        if(month==month1 && year==year1 ){
    eTable += "<tr>";
    eTable += "<td>"+data2[i]['ph']+"</td>";
    eTable += "<td>"+data2[i]['oksigen']+"</td>";
    eTable += "<td>"+data2[i]['suhu']+"</td>";
    eTable += "<td>"+data2[i]['created_at']+"</td>";
    eTable += "</tr>";
        }
        }
   eTable +="</tr>";
  //$("#forTable").remove();
  $('#forTable').html(eTable);
  
        
        
    }
     function create_table_full(data2)
    {
        
        var data1 = data2[0]['ph'];
        console.log(data1);
        var eTable="<tr scope='row'>";
        for(var i=0; i<data2.length;i++)
        {
        var databel = data2[i]['created_at'];
        var d = new Date(databel);     
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        //var dt = $("#from-datepicker").val().toString();
        var d1 = new Date();
        var day1 = d1.getDate();
        var month1 = d1.getMonth();
        var year1 = d1.getFullYear();
        console.log(day);
        console.log(day1);
         if(month==month1 && year==year1 ){   
    eTable += "<tr>";
    eTable += "<td>"+data2[i]['ph']+"</td>";
    eTable += "<td>"+data2[i]['oksigen']+"</td>";
    eTable += "<td>"+data2[i]['suhu']+"</td>";
    eTable += "<td>"+data2[i]['created_at']+"</td>";
    eTable += "</tr>";
         }
        }
   eTable +="</tr>";
  //$("#forTable").remove();
  $('#forTable').html(eTable);
  
        
        
    }
     function create_table_date(data2)
    {
        
        var data1 = data2[0]['ph'];
         //console.log(data1);
        var eTable="<tr scope='row'>";
        for(var i=0; i<data2.length;i++)
        {
        var databel = data2[i]['created_at'];
        var d = new Date(databel);     
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        var dt = $("#from-datepicker2").val().toString();
        var d1 = new Date(dt);
        var day1 = d1.getDate();
        var month1 = d1.getMonth();
        var year1 = d1.getFullYear();
        console.log(day);
        console.log(day1);
         if(day==day1 && month==month1 && year==year1 ){   
    eTable += "<tr>";
    eTable += "<td>"+data2[i]['ph']+"</td>";
    eTable += "<td>"+data2[i]['oksigen']+"</td>";
    eTable += "<td>"+data2[i]['suhu']+"</td>";
    eTable += "<td>"+data2[i]['created_at']+"</td>";
    eTable += "</tr>";
         }
        }
   eTable +="</tr>";
  //$("#forTable").remove();
  $('#forTable').html(eTable);
  
        
        
    }
    $(document).ready(function(){
        var ph1 = <?php echo $idkolam ?>;
        
        $.ajax({
      url:      'http://dprompt.id/restapi/public/sensor/sensorjson/'+ph1,
	  method:   'GET',
	  dataType: 'json',
	  success:  function(data) {
	      create_table_full(data);
	  }
    }); 
  $("#formsensor").click(function(){
    //disable the submit button
    //$(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url:      'http://dprompt.id/restapi/public/sensor/sensorjson/'+ph1,
	  method:   'GET',
	  dataType: 'json',
	  success:  function(data) {
	      test = $("#from-datepicker").val();
	      console.log(test);
	      create_table(data);
	  }
    }); 
  });
  $("#formsensor2").click(function(){
    //disable the submit button
    //$(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url:      'http://dprompt.id/restapi/public/sensor/sensorjson/'+ph1,
	  method:   'GET',
	  dataType: 'json',
	  success:  function(data) {
	      test = $("#from-datepicker2").val();
	      console.log(test);
	      create_table_date(data);
	  }
    }); 
  });
});

    //$( "#from-datepicker" ).click(function() {
  //$("#from-datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).val();
     //var date= $('#from-datepicker').val();
     //alert(date);
//});
    
    </script>
    
  </body>
</html>