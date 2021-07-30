<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrasi Kolam</title>

    <!-- Icons font CSS-->
    
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
    
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registrasi Kolam</h2>
                    <form class="info">
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="nama_kolam">ID Kolam</label>
                        <input type="text" name="id" id="id" class="input--style-4" required="require">
                                </div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="nama_kolam">Nama Kolam</label>
                        <input type="text" name="nama_kolam" id="nama_kolam" class="input--style-4" required="require">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <label for="lokasi">Lokasi</label>
									<input type="text" name="lokasi" id="lokasi" class="input--style-4" required="require">
                                    </div>
                                </div>
                            </div>
							<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="tanggal_registrasi">Tanggal Registrasi(YY-MM-DD)</label>
                        <input type="text" id="from-datepicker" autocomplete="off" class="input--style-4" required="require">
                                    </div>
                                </div>
                            </div>
                       
                        <div class="p-t-15">
                             <input type="submit" name="send" id="send" value="Simpan" class="btn btn--radius-2 btn--blue">
							
                        </div>
                    </form>
					<div class="p-t-15">
                            <input type="submit" class="btn btn--radius-2 btn--blue" value="Back" value="Back" id="back"  name="back">
							<!--<button class="btn btn--radius-2 btn--blue" value="Back"><a href="/restapi/public/kolam/daftar" value="Back">-->
                        </div>
					
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
           
<script>

$( "#back" ).click(function() {
  window.history.go(-1); return false;
});
$( document ).ready(function() {
     $("#from-datepicker").datepicker({ dateFormat: 'yy-mm-dd'}).val();
    });
    //$("#from-datepicker").on("change", function () {
        //var fromdate = datepicker({ dateFormat: 'yy-mm-dd' })
        //alert(fromdate);
    //});
//}); 
</script>
<script>
function generate_token(length){
    //edit the token allowed characters
    var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
    var b = [];  
    for (var i=0; i<length; i++) {
        var j = (Math.random() * (a.length-1)).toFixed(0);
        b[i] = a[j];
    }
    return b.join("");
}
var token = generate_token(35);

$(document).ready(() => {
        $('.info').on('submit', () => {
  
            $.ajax({
          url: "http://dprompt.id/restapi/public/kolam/create",
          type: 'POST',
          data: { 
                  id: $('#id').val(),
                  nama_kolam: $('#nama_kolam').val(),
                  lokasi: $('#lokasi').val(),
                  tanggal_registrasi: $('#from-datepicker').val()
				  //token: token
                },
          //contentType: 'application/json',
          //headers: {
                    //"Authorization": token
                 //},
			success: function(data){
    window.location.href = '/restapi/public/kolam/daftar';
},
            error: function(jqXHR, textStatus, errorThrown){
            alert('ID kolam sudah tersedia');
        },
          //async: false
            });
		
			window.sessionStorage.setItem("Authorization", token);
			//top.location.href = '/regus';
			var sessiontoken = window.sessionStorage.getItem("Authorization");
			//alert(sessiontoken);
            return false;
        });
    });
 //$('.info').keypress((e) => {
  
        // Enter key corresponds to number 13
        //if (e.which === 13) {
           // $('.info').submit();
            //console.log('form submitted');
        //}
   // })

</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->