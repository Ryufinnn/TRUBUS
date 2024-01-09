<? session_start();
if(session_is_registered('user_id'))
{
	include "./include/conn.php";
	//echo "sabar gus";
	$iduser=$_SESSION['user_id'];
	$idbrg=$_GET['idbrg'];
	$idbrg=$_GET['idbrg'];
	$jumlah=$_POST['jumlah'] ;
	$tanggal;
	
	//cek status pelanggan
	$view=mysql_db_query($db,"select * from laporan where iduser='$iduser'",$koneksi);
	while($row=mysql_fetch_array($view)){
		$status=$row['status'];
	}
	
	//cek apakan dia pernah bertransaksi
	$cek=mysql_num_rows($view);
	
	//jik belum ada id pelanggan di tabel laporan, berarti pelanggan tersebut belum pernah transaksi
	//jadi dia boleh belakukan transaksi (syarat pertama)
	if (!empty($cek)){
		//echo "pernah transaksi";
		
		//jika transaksi sebelumnya sudah lunas, maka boleh transaksi lagi
		if ($status=='proses'){
			//echo "sudah transaksi tapi belum bayar, GAK BOLEH TRANSAKSI LAGI";
			echo "<script> document.location.href='index.php?page=5&status=<font color=red>Maaf, transaksi Anda sebelumnya belum Lunas</font>'; </script>";
		}else{
		//kalo udah lunas
			//echo "udah daftar, AND Boleh KOK,,,kan udah LUNAS";
			
			mysql_query("insert into shoping(idshop,idbrg,iduser,tgl,jumlah)
 value('$idshop','$idbrg','$iduser','$tgll','1')");
			$transaksi=mysql_db_query($db,"insert into pemesanan(idbrg,iduser,tgl,status,jumlah) values('$idshop,idbrg','$iduser','$tanggal','proses','1')",$koneksi);
			echo "<script> document.location.href='index.php?page=6'; </script>";
		}		
	}else{
		//echo "boleh transaksi lagi";
		$query=mysql_db_query($db,"insert into shoping(idshop,idbrg,iduser,tgl,jumlah) values('$idshop','$idbrg','$iduser','$tanggal','1')",$koneksi);
		$transaksi=mysql_db_query($db,"insert into pemesanan(idbrg,iduser,tgl,status,jumlah) values('$idbrg','$iduser','$tanggal','proses','1')",$koneksi);
		echo "<script> document.location.href='index.php?page=6'; </script>";
	}
		
	

	/*
	$query=mysql_db_query($db,"insert into shoping(idshop,idbrg,iduser,tgl) values('$idshop,$idbrg','$iduser','$tanggal')",$koneksi);
	$transaksi=mysql_db_query($db,"insert into pemesanan(idbrg,iduser,tgl) values('$idbrg','$iduser','$tanggal')",$koneksi);
	echo "<script> document.location.href='index.php?page=5&status=Terimakasih, barang yang anda pilih sudah masuk ke Shopping cart'; </script>";
	*/
	
	
}else{
	echo "<script> document.location.href='index.php?page=5&status=<font color=red>Maaf, Sebelum transaksi Anda harus daftar dan login member </font>'; </script>";
}
?>
