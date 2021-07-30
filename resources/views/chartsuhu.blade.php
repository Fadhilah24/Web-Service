<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../css2/style.css">
	<link rel="stylesheet" href="../../../fonts2/icomoon/style.css">

    <link rel="stylesheet" href="../../../css2/owl.carousel.min.css">
    
    <link rel="stylesheet" href="../../../css2/bootstrap.min.css">
	<link rel="stylesheet" href="../../../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../../../css/style.css">
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
                 
                  <li><a href="/restapi/public/logout" class="nav-link">Logout</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
    <body>

        <br><br><br>
        <!-- menampilkan grafik dengan id chartContainer -->
        <!-- ukuran grafik: tinggi = 550 piksel, dan maksimal lebar 920 piksel -->
        <div id="chartContainer" style="height: 500px; max-width: 920px; margin: 0px auto;"></div>
        <script src="../../../js/jquery-3.3.1.min.js"></script>
        <script src="../../../js/popper.min.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <script src="../../../js/main.js"></script>
	    <script src="../../../js2/jquery-3.3.1.min.js"></script>
        <script src="../../../js2/popper.min.js"></script>
        <script src="../../../js2/bootstrap.min.js"></script>
        <script src="../../../js2/jquery.sticky.js"></script>
        <script src="../../../js2/main.js"></script>


        <!-- import libaray canvasjs dan jquery dengan cdn  -->
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <script>
        
            window.onload = function () {
                var nama_kolam = "<?php echo $nama_kolam ?>";
                var dt = new Date("2021-07-19 16:09:46");
                dt.setFullYear( dt.getFullYear() - 10 );
                console.log( dt.getFullYear() );

                //inisialisasi data array dps kepanjangan dari datapoints
                var dps = [];
				var ph = <?php echo json_encode($datasensor)?>;
				//console.log(ph);
				var datear = [];
				var date = <?php echo json_encode($date)?>;
				var length = date.length;
				for (var j = 0; j < length; j++) {
                          datear[j] = date[j].created_at;
                          var d4 = new Date(datear[j]);
                            var day4 = d4.toLocaleTimeString();
                            datear[j] = day4;
                        }
				//console.log(datear);
				var ph1 = <?php echo $idkolam ?>;
				//console.log(ph1);
                var dataLength = ph.length; // panjang data yang ditampilkan (horizontal), ditampilkan di bagian bawah grafik
                var updateInterval = 300000; //setiap 1,5 dtk data direfresh
                var xVal = 0; 
                var yVal = 0; 
				var counter = 0;
				var start = dataLength - 15;
                //inisialisasi chart js
                var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                        text: "Sensor Suhu "+nama_kolam //memberi judul grafik
                    },
                    data: [{
                        type: "spline", //tipe grafik yang digunakan, lihat di situsnya untuk lihat gaya lain
                        dataPoints: dps //dps adalah data yang digunakan
                    }]
                });
				
                var updateChart = function (count) {
                    yVal = ph
                    //xDate = date;// mengisi variabel yVal dengan data usd
							//console.log(yVal.length);
                        count = count;
						counter = yVal.length;
						
						
						//started = start +
						if(start<0){
							start = 0;
						}
						//console.log(start);
                        //melakukan perulangan data dengan for agar data dapat dijalankan
                        for (var j = start; j < count; j++) {
                            dps.push({
                                label: datear[j],
                                y: yVal[j]
                            });
                            xVal++;
							//console.log(yVal[j]);
							//counter++;
                        }
                     $.ajax({
							url:      'http://dprompt.id/restapi/public/sensor/sensorkolam1/chartjson/'+ph1,
							method:   'GET',
							dataType: 'json',
							success:  function(data) {
                        var usd = data; //mengambil data spesifik rate_float
						//var phdc =JSON.stringify(usd);
						var datlength = data.length;
						var phstr = [];
						for (var j = 0; j < datlength; j++) {
                          phstr[j] = JSON.parse(usd[j]['suhu']);
                        }
                        var dates = [];
                        for (var j = 0; j < datlength; j++) {
                          dates[j] = usd[j].created_at;
                          var d4 = new Date(dates[j]);
                            var day4 = d4.toLocaleTimeString();
                            dates[j] = day4;
                        }
                        //var stri = JSON.stringify(phstr);
                        //var parseph = (stri);
						//console.log(JSON.parse(parseph));
                        //console.log(dates); //menampilkan data dengan console.log hanya terlihat saat mode inspect element
                        yVal = phstr ;// mengisi variabel yVal dengan data usd
						xDate = dates;	//console.log(yVal.length);
                        count = count;
						counter = yVal.length;

                        //melakukan perulangan data dengan for agar data dapat dijalankan
                        
						//console.log(counter);
                        //jika datapoints telah melewati datalength
                        if (dps.length > 15) {
                            dps.shift(); //maka hapus data awal dengan fungsi shift()
                        }
						//console.log(xVal+start);
						//console.log(counter);
						if(xVal+start<counter){
						    //console.log(xVal);
						    //console.log(counter);
						dps.push({
						        x: xVal,
                                label: xDate[counter-1],
                                y: yVal[counter-1]
                            });
                            xVal++;
						}
						if (dps.length > 15) {
                            dps.shift(); //maka hapus data awal dengan fungsi shift()
                        }
							//console.log(yVal[counter-1]);
							}
                    })
					//var minus = counter+1;
					//console.log(minus);
					//console.log(xVal);
					//console.log(counter);
					 //if(xVal==minus){
						//xVal--;
						//counter--;
					//}
					//if(xVal<counter){
						
						
					chart.render();
					//}else{
						//xVal--;
					//}
					setTimeout(updateChart, 1);
					
                };
				
				
                //jalankan fungsi updateChart di atas
                //updateChart(dataLength);
				//showChart(dataLength);
				updateChart(dataLength);
                //fungsi agar data dapat diupdate setiap 1000 detik sekali
                //setTimeout(updateChart, 1000);
            }

        </script>
    </body>
</html>
