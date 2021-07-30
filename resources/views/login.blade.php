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
    <title>Login Page</title>

    <!-- Icons font CSS-->
    <link href="../public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../public/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	 
    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
</head>
<style>
   input[type=button] {
  cursor:pointer;
}
</style>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Login Page</h2>
					<form class="info">
                    <!--<form action="{{url('/login')}}" method="post">-->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="input--style-4" required="require">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <label for="password">Password</label>
									<input type="password" name="password" id="password" class="input--style-4" required="require">
									<input type="button"  onclick="showPassword()"value="Show Password">
                                    </div>
                                </div>
                            </div>
                       
                        <div class="p-t-15">
                             <input type="submit" name="send" id="sendButton" value="Simpan" class="btn btn--radius-2 btn--blue">
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../public/vendor/select2/select2.min.js"></script>
    <script src="../public/vendor/datepicker/moment.min.js"></script>
    <script src="../public/vendor/datepicker/daterangepicker.js"></script>
	 
    <!-- Main JS-->
    <script src="../js/global.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script>
function showPassword() {
  var x = document.getElementById("password");
  //x.style.cursor = "default" ;
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
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
          url: "http://dprompt.id/restapi/public/login",
          type: 'POST',
          data: { 
                  username: $('#username').val(),
                  password: $('#password').val(),
				  token: token
                },
          //contentType: 'application/json',
          //headers: {
                    //"Authorization": token
                 //},
			success: function(data){
    window.location.href = 'kolam/daftar';
},
            error: function(jqXHR, textStatus, errorThrown){
            alert('username atau password salah');
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