<!DOCTYPE html>
<html>
<head>
	<title>List Kolam</title>
</head>
<body>
 
	<h2>List Kolam</h2>
 
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama kolam</th>
			<th>Lokasi</th>
			<th>Tanggal registrasi</th>
			<th>Opsi</th>
		</tr>
		@foreach($registrasi_kolam as $l)
		<tr>
			<td>{{ $l->nama_kolam }}</td>
			<td>{{ $l->lokasi }}</td>
			<td>{{ $l->tanggal_registrasi }}</td>
			<td>
				<a href="">Edit</a>
				
				<a href="">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>