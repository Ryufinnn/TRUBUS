<?php
session_start();
include "./include/conn.php";


function list_reg(){
			  $qry=mysql_query("Select * from daftar");
			  
			  while ($datap=mysql_fetch_object($qry)){
				echo "
	<tr bgcolor=\"#FFFFFF\">                                                                                     
		<td>$datap->id</td>
		<td>$datap->nama</td>
		<td>$datap->tanggal</td>
		<td>$datap->alamat</td>
		<td>$datap->kota</td>
		<td>$datap->telpon</td>
		<td><div align=\"center\"><a href=\"laporan_reg.php?noreg=$datap->noreg&act=del\">
			<img src=\"gbr/icon_delete.jpg\" width=\"16\" height=\"13\" border=\"0\"></a></div></td>
	</tr>";
	}
}

function hapus_reg (){
	$noreg=$_GET['noreg'];
	mysql_query("delete from reg where noreg=$noreg");
	}

function list_daftar(){
			  $qry=mysql_query("Select * from daftar");
			  while ($datap=mysql_fetch_object($qry)){
				echo "
	<tr bgcolor=\"#FFFFFF\">                                                                                     
		<td>$datap->id</td>
		<td>$datap->nama</td>
		<td>$datap->tanggal</td>
		<td>$datap->alamat</td>
		<td>$datap->kota</td>
		<td>$datap->telpon</td>
		<td align='center'>";
		if($datap->administrasi=='Lunas'){
			echo "".$datap->administrasi."";
		}
		else {
			echo "".$datap->administrasi." [<a href=update_administrasi.php?id=".$datap->noreg2.">Lunas</a>]";
		}

echo "</td>
		<td><div align=\"center\"><a href=\"laporan_daftar_edit.php?noreg=$datap->noreg2\">
			<img src=\"gbr/icon_edit.png\" width=\"16\" height=\"13\" border=\"0\"></a></div></td>
		<td><div align=\"center\"><a href=\"laporan_daftar.php?noreg=$datap->noreg2&act=del\">
			<img src=\"gbr/icon_delete.jpg\" width=\"16\" height=\"13\" border=\"0\"></a></div></td>
	</tr>";
	}
}


function hapus_daftar (){
	$noreg=$_GET['noreg'];
	mysql_query("delete from daftar where id=$id");
	}


function edit_daftar(){
$noreg=$_GET['noreg'];
	$qry=mysql_query("select * from daftar where id=$id");
	$datacat=mysql_fetch_object($qry);
	return $datacat;

	
}


function simpan_edit_daftar(){
    mysql_query("UPDATE daftar SET noreg2 = '$_GET[id]',
								   nama2 = '$_GET[nama]', 
                                   jenkel2 = '$_GET[tanggal]', 
								   sklh_asal2 = '$_GET[alamat]',
								   n_stl2 = '$_GET[kota]'
                             WHERE noreg2  = '$_GET[telpon]'");
 }

?>