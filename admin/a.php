<? session_start(); 
	include "./include/conn.php";
if (session_is_registered('id'))
{
?>

	<html> 
	<head> 
	<title>laporan</title>
	<table width="49%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
	<tr> 
		
		<td width="96%" bgcolor="#6666666" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF">Laporan Pemesanan</font></strong></div></td>
		
	</tr>
	
	<tr>    
		 
				
				 
				
				
				   <div align="center">
				     <p><a href="a.php?page=13" style="text-decoration:none" title="Masukan Produk Baru"></a></p>
				    <font color='#0066FF' face='verdana' size='2'><div align="center"><blink><? echo $_GET['status'] ?></blink></div>
			    </font></p>
				   </div>
				   <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
			    <?
				//untuk paging
				$query=mysql_db_query($db,"select * from laporan ",$koneksi); //input
				$get_pages=mysql_num_rows($query);
				
				if ($get_pages>$entries)  //proses
				{
					echo "Halaman : ";
					$pages=1;
					while($pages<=ceil($get_pages/$entries))
					{
						if ($pages!=1)
						{
							echo " | ";
						}
					?>
							<a href="a.php?page=7&id=<? echo ($pages-1); ?> " style="text-decoration:none"><font color="#0066FF"><? echo $pages; ?></font></a> 
						 <?
							$pages++;
					}
				}else{
					$pages=0;
				}
				?>
						 </font>
					 </p>
						 
						 <?
				//akhir paging
				
				
				//proses halaman
				$page=(int)$_GET['id'];
				$offset=$page*$entries;
				$result=mysql_db_query($db,"select * from laporan order by tgl asc limit $offset,$entries",$koneksi); //output
				$jumlah=mysql_num_rows($query);
					
				
				if ($jumlah){
					?><br />
		<table width="418" border="0" align="center" cellspacing="2">
		<tr bgcolor="#999999">
				   </div><font face="verdana" size="2" color="#666666"><? echo "Tanggal Sekarang : ".$tanggal;?></font><br><br>
					   <table align="center" width="563" border="0">
				<tr>
				  <td width="5%" bgcolor="#CCCCCC"><div align="center"><b>
				  <font color="#666666" size="2" face="Arial, Helvetica, sans-serif">NO</font></b></div>
				  </td>
				  <td width="21%" bgcolor="#CCCCCC"><div align="center"><b>
				  <font color="#666666" size="2" face="Arial, Helvetica, sans-serif">KODE PESANAN</font></b></div>
				  </td>
				  <td width="23%" bgcolor="#CCCCCC"><div align="center"><b>
				  <font color="#666666" size="2" face="Arial, Helvetica, sans-serif">PELANGGAN</font></b></div>
				  </td>
				  <td width="22%" bgcolor="#CCCCCC"><div align="center"><b><font color="#666666" size="2" face="Arial, Helvetica, sans-serif">TANGGAL</font></b>
				  </div> </td>
				  <td width="16%" bgcolor="#CCCCCC"><div align="center"><b><font color="#666666" size="2" face="Arial, Helvetica, sans-serif">STATUS</font></b></div>
				  </td>
				  <td width="13%" bgcolor="#CCCCCC"><div align="center"><b><font color="#666666" size="2" face="Arial, Helvetica, sans-serif">AKSI</font></b></div>
				  </td>
				</tr>
					<?
					
					while ($row=mysql_fetch_array($result))
					{
					
							$idlap=$row['idlap'];
							$iduser=$row['iduser'];
							$tgl=$row['tgl'];
							$status=$row['status'];
							$kode=$row['kode'];
							
							
							
							
							//translate id
							$transbrg=mysql_db_query($db,"select * from daftar where id='$iduser'",$koneksi);
							while ($row=mysql_fetch_array($transbrg)){
								$nama=$row['nama'];
							}
							
							
							
					?>
					<tr>
						<td align="center">
							<font face="verdana" size="1" color="#999999"><? echo $c=$c+1;?></font>
						</td>
						
						<td align="center">
							<font face="verdana" size="1" color="#666666"><? echo $kode;?></font>
						</td>
						
						<td align="center">
							<font face="verdana" size="1" color="#999999"><? echo $nama;?></font>
						</td>
						
						<td align="center">
							<font face="verdana" size="1" color="#999999"><? echo $tgl;?></font>
						</td>
						
						<td align="center">
							<font face="verdana" size="1" color="#333333"><? echo ucwords($status);?></font>
						</td>
						
						<td align="center">
							
							<a href="a.php?page=12&nama=<? echo $nama;?>&iduser=<? echo $iduser;?>">
							<img src="./img/update.png" border="0" title="Ganti Status Pemesanan"></a>
							
							<a href=warning.php?id=<? echo $idlap; ?>&type=pesanan&hal=a.php?page=7 style='text-decoration:none' title="hapus">
							<img src="./img/hapus.png" border="0" title="Hapus">
							</a>
						</td>
						
					</tr>
					
					<tr>
						<td colspan="6"><hr color="#CCCCCC"></td>
					</tr>
					<?
					}
					?> 
				   </table>
					<?
				
				}else{
					echo "<font color='#FF0000' face='verdana' size='2'><b>Belum ada data!!</b></font>";
				}
				?>
				 
				 
						
				</td></tr> 
		  </table>
		</td>
	
	</tr>
	<tr> 
		
		<td bgcolor="#5686c6" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF">Jumlah Artikel : <b><? echo $jumlah; ?></font></strong></div></td>
		
	</tr>
	</table>
	<script language="javascript">
				<!--
				function tutup()
				{
					top.window.close()
				}
				//-->
				</script>
				
				<script language="JavaScript" type="text/javascript">
				<!--
				@media print {
				input.noPrint { display: none; }
				}
				//-->
				</script>
				<input type="button" onClick="tutup()" value="Keluar">
				<input class="noPrint" type="button" value="Cetak Halaman ini" onClick="window.print()">
				</p></td></tr>
			</table>
    <p>&nbsp;</p>
    <?	
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>