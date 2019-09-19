<?php
header('Content-type: application/xml');
header("Access-Control-Allow-Origin:*");

echo "<tempat_hiburan>";

	$host="localhost";
    $user="root";
    $passwd="";
    $db="sistem_wisata";
    $koneksi = mysqli_connect($host, $user, $passwd)or die (mysqli_error($koneksi));
    if ($koneksi)
    {
        mysqli_select_db($koneksi,$db) or die(mysql_error());
    }
	
$sql="select * from tempat_hiburan";
$query=mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
while ($tempatwisata=mysqli_fetch_array($query)) {
	echo "<tempat_wisata id='".$tempatwisata['id']."'>";
	echo "<id>".$tempatwisata['id']."</id>";
	echo "<nama_tempat>".$tempatwisata['nama_tempat']."</nama_tempat>";
	echo "<lokasi_wisata>".$tempatwisata['lokasi_wisata']."</lokasi_wisata>";
	echo "</tempat_wisata>";
}
echo "</tempat_hiburan>";