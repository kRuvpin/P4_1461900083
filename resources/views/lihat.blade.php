<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data Rak buku</h3>
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>judul</th>
			<th>tahun_terbit/th>
			<th>jenis</th>
		</tr>
		@foreach($jenis_buku as $jbk, $rak_buku as $rbk, $buku as $bk)
		<tr>
			<td>{{ $rbk->id }}</td>
			<td>{{ $bk->judul }}</td>
			<td>{{ $bk->tahun_terbit }}</td>
            <td>{{ $jbk->jenis }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>