<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../../../../public/css2/style.css">
	<link rel="stylesheet" href="../../../../public/fonts2/icomoon/style.css">

    <link rel="stylesheet" href="../../../../public/css2/owl.carousel.min.css">
    
    <link rel="stylesheet" href="../../../../public/css2/bootstrap.min.css">
	<link rel="stylesheet" href="../../../../public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../../../public/fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../../public/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../../../../public/css/style.css">

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
      <h2 class="mb-5">Sensor Suhu</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">avg ph</th>
              <th scope="col">min ph</th>
              <th scope="col">max ph</th>
              <th scope="col">Tanggal</th>
              <th> <input type="text" id="from-datepicker" placeholder="Pilih Bulan" autocomplete="off"> <input type="submit" id="formsensor" value="OK"></th>
              
            </tr>
          </thead>
          <tbody id="forTable">
          
           </tbody>
        </table>
      </div>


    </div>

  </div>
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../../../public/js/jquery-3.3.1.min.js"></script>
    <script src="../../../../public/js/popper.min.js"></script>
    <script src="../../../../public/js/bootstrap.min.js"></script>
    <script src="../../../../public/js/main.js"></script>
	<script src="../../../../public/js2/jquery-3.3.1.min.js"></script>
    <script src="../../../../public/js2/popper.min.js"></script>
    <script src="../../../../public/js2/bootstrap.min.js"></script>
    <script src="../../../../public/js2/jquery.sticky.js"></script>
    <script src="../../../../public/js2/main.js"></script>
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script>
    $( document ).ready(function() {
     $("#from-datepicker").datepicker({ dateFormat: 'yy-mm' }).val();
     //var date= $('#from-datepicker').val();
     //alert(date);
    });
     function maxMinAvg(arr) {
    var max = arr[0];
    var min = arr[0];
    var sum = arr[0]; //changed from original post
    for (var i = 1; i < arr.length; i++) {
        if (arr[i] > max) {
            max = arr[i];
        }
        if (arr[i] < min) {
            min = arr[i];
        }
        sum = sum + arr[i];
    }
    return [max, min, sum/arr.length]; //changed from original post
}

    function countUnique(iterable) {
       const unique = (value, index, self) => {
  return self.indexOf(value) === index
}

//const ages = [26, 27, 26, 26, 28, 28, 29, 29, 30];
const uniqueAges = iterable.filter(unique);
return uniqueAges;
}
function create_table(data2)
    {
        
        var data1 = data2[0]['oksigen'];
        //console.log(data1);
        var eTable="<tr scope='row'>";
        var count2 = 0;
         
        var dataph1 =[];
        var tanggal1 = [];
        
        var count1 = 0;
        //for(var j=0; j<data2.length;i++)
        //{
        for(var i=0; i<data2.length;i++)
        {
        var databel1 = data2[i]['created_at'];
        var d3 = new Date(databel1);     
        var day3 = d3.getDate();
        var month3 = d3.getMonth();
        var year3 = d3.getFullYear();
        var dt4 = $("#from-datepicker").val().toString();
        var d4 = new Date(dt4);
        var day4 = d4.getDate();
        var month4 = d4.getMonth();
        var year4 = d4.getFullYear();
        if( month==month1 && year==year1 ){  
            var databel2 = data2[i]['created_at'];
            var d4 = new Date(databel2);
            var day4 = d4.getDate();
             //dataph1[count1] = JSON.parse(data2[i]['ph']);
            tanggal1[count1] = day4;
            count1 ++ ;
         }
        }
        var datadate = countUnique(tanggal1);
        
        //console.log(datadate);
        for(var i=0; i<datadate.length;i++)
        {
        var count = 0;
        var dataph =[];
        var tanggal = []; 
        var datadate1 = datadate[i];
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
        //console.log(datadate1);
        //console.log(datadate1);
        //var count = 0;
        
        //var tesarr1 = [];
         if( month==month1 && year==year1 ){ 
             var tesarr = [];
             for(var j=0; j<data2.length;j++)
        {
            
        var databel5 = data2[j]['created_at'];
        var d5 = new Date(databel5);     
        var day5 = d5.getDate();
        var month5 = d5.getMonth();
        var year5 = d5.getFullYear();
        var dt6 = $("#from-datepicker").val().toString();
        var d6 = new Date(dt6);
        var day6 = d6.getDate();
        var month6 = d6.getMonth();
        var year6 = d6.getFullYear();
        tesarr[j]=day5;
        //tesarr1[j]=datadate1;
        console.log(tesarr);
        console.log(datadate1);
        if(datadate1 == day5 && month==month1 && year==year1 ){ 
            
             dataph[count] = JSON.parse(data2[j]['oksigen']);
            tanggal[count] = data2[j]['created_at'];
            count ++ ;
        }
            
         }
         
         //console.log(tanggal);
        var max = maxMinAvg(dataph)[0];
        var min = maxMinAvg(dataph)[1];
        var avg = maxMinAvg(dataph)[2];
        //console.log(tanggal);
        //if(day==day1 && month==month1 && year==year1 ){   
        var tanggal1 = tanggal[0];
        //console.log(tanggal1);
        var d2 = new Date(tanggal1);
        var day2 = d2.toLocaleDateString();
;
    eTable += "<tr>";
    eTable += "<td>"+avg+"</td>";
    eTable += "<td>"+max+"</td>";
    eTable += "<td>"+min+"</td>";
    eTable += "<td>"+day2+"</td>";
    eTable += "</tr>";
        }
        
  
    // }    //}
   eTable +="</tr>";
  //$("#forTable").remove();
  $('#forTable').html(eTable);
        
        
    }
    }
  function create_table_full(data2)
    {
        
        
        var data1 = data2[0]['oksigen'];
        //console.log(data1);
        var eTable="<tr scope='row'>";
        var count2 = 0;
         
        var dataph1 =[];
        var tanggal1 = [];
        
        var count1 = 0;
        //for(var j=0; j<data2.length;i++)
        //{
        for(var i=0; i<data2.length;i++)
        {
        var databel1 = data2[i]['created_at'];
        var d3 = new Date(databel1);     
        var day3 = d3.getDate();
        var month3 = d3.getMonth();
        var year3 = d3.getFullYear();
        //var dt4 = $("#from-datepicker").val().toString();
        var d4 = new Date();
        var day4 = d4.getDate();
        var month4 = d4.getMonth();
        var year4 = d4.getFullYear();
        if( month==month1 && year==year1 ){  
            var databel2 = data2[i]['created_at'];
            var d4 = new Date(databel2);
            var day4 = d4.getDate();
             //dataph1[count1] = JSON.parse(data2[i]['ph']);
            tanggal1[count1] = day4;
            count1 ++ ;
         }
        }
        var datadate = countUnique(tanggal1);
        
        //console.log(datadate);
        for(var i=0; i<datadate.length;i++)
        {
        var count = 0;
        var dataph =[];
        var tanggal = []; 
        var datadate1 = datadate[i];
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
        //console.log(datadate1);
        //console.log(datadate1);
        //var count = 0;
        
        //var tesarr1 = [];
         if( month==month1 && year==year1 ){ 
             var tesarr = [];
             for(var j=0; j<data2.length;j++)
        {
            
        var databel5 = data2[j]['created_at'];
        var d5 = new Date(databel5);     
        var day5 = d5.getDate();
        var month5 = d5.getMonth();
        var year5 = d5.getFullYear();
        //var dt6 = $("#from-datepicker").val().toString();
        var d6 = new Date();
        var day6 = d6.getDate();
        var month6 = d6.getMonth();
        var year6 = d6.getFullYear();
        tesarr[j]=day5;
        //tesarr1[j]=datadate1;
        console.log(tesarr);
        console.log(datadate1);
        if(datadate1 == day5 && month==month1 && year==year1 ){ 
            
             dataph[count] = JSON.parse(data2[j]['oksigen']);
            tanggal[count] = data2[j]['created_at'];
            count ++ ;
        }
            
         }
         
         //console.log(tanggal);
        var max = maxMinAvg(dataph)[0];
        var min = maxMinAvg(dataph)[1];
        var avg = maxMinAvg(dataph)[2];
        //console.log(tanggal);
        //if(day==day1 && month==month1 && year==year1 ){   
        var tanggal1 = tanggal[0];
        //console.log(tanggal1);
        var d2 = new Date(tanggal1);
        var day2 = d2.toLocaleDateString();
;
    eTable += "<tr>";
    eTable += "<td>"+avg+"</td>";
    eTable += "<td>"+max+"</td>";
    eTable += "<td>"+min+"</td>";
    eTable += "<td>"+day2+"</td>";
    eTable += "</tr>";
        }
        
  
    // }    //}
   eTable +="</tr>";
  //$("#forTable").remove();
  $('#forTable').html(eTable);
        
        
    }
  
        
        
    }
    $(document).ready(function(){
  var ph1 = <?php echo $idkolam ?>;     
    //var arr1 = [24,24,25,26,26,25,25,24,24,25,25,24,24,26,26,26,27];
    //var test = countUnique(arr1);
    //console.log(test);
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
	      //console.log(test);
	      create_table(data);
	  }
    }); 
  });

});
    </script>
  </body>
</html>