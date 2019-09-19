<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sistem_wisata'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT id, nama_tempat, lokasi_wisata 
		FROM tempat_hiburan';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1" cellpadding="5" cellspacing="0">
		<thead>
		<title>DATA TEMPAT HIBURAN</title>
			<tr>
				<th>ID</th>
				<th>NAMA TEMPAT</th>
				<th>LOKASI WISATA</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['nama_tempat'].'</td>
			<td>'.$row['lokasi_wisata'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);
mysqli_close($conn);