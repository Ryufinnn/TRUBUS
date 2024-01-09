


<?php 
echo "<div>



<h2 class='head'>LAPORAN PEMESANAN</h2>
<form action='a.php' method='POST' target='_blank'>";
		
/////combonamabln(1, 12, bulan, 1);
$now =  date("Y");
/////combothn(2000, $now, tahun, 1);



echo"<input type=submit name=submit value=Tampilkan></form>
</div>";
?>

<select name='tanggal'>
<option value=0 selected>--2014--</option>
<option value=0 selected>--2013--</option>
<?php
$sqlkelas="select * from daftar";
$hasil=mysql_query($sqltanggal);
while($si11=mysql_fetch_array($hasil))
{
echo "<option value=$si11[tanggal]>$2014[tanggal]</option>";
}
?>