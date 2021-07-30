<!DOCTYPE html>
<html>
    <head>
        <title>Untitled Document</title>
    </head>
    <body>
        <table align="center" border=1>

        </table>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script>
		$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		//selesai();
		//alert("tes");
	}, 200);
}
 
function update() {
	$.getJSON("sensorkolam", function(data) {
		$("table").empty();
		alert(data.result);
		var no = 1;
		//console.log(data.result);
		$.each(data.result, function() {
			$("table").append("<tr><td>"+(no++)+"</td><td>"+this['ph']+"</td><td>"+this['oksigen']+"</td><td>"+this['suhu']+"</td></tr>");
			
		});
	});
}
		</script>
    </body>
</html>