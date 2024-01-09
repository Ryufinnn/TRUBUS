<? session_start();
if (session_is_registered('id')){

	$idlap=$_GET['idlap'];
	$iduser=$_GET['iduser'];

	include "./include/conn.php";
	?><br />
		<table width="418" border="0" align="center" cellspacing="2">
		<tr bgcolor="#6666666">
			<th width="28"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">NO</font></th>
			<th width="245"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">NAMA PELANGGAN</font></th>
			<th width="131"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">TANGGAL</font></th>
			<th width="131"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">STATUS</font></th>
		</tr>
	<?
	$query=mysql_db_query($db,"select * from daftar where id='$iduser' order by tgl",$koneksi);
		
		
				
			//translate id
			$user=mysql_db_query($db,"select * from daftar where id='$iduser'",$koneksi);
			 while ($row=mysql_fetch_array($user))
			 {
				$nama=$row['nama'];
				$tanggal=$row['tanggal'];
				
			}
			
		?>
		  <tr>
			<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo $c=$c+1; ?></font></td>
			<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo $nama;?></font></td>
			<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo $tanggal;?></font></td>
						

		  </tr>
		 <?
		 
		}
		?>
		<tr><td colspan="4"><hr /></td></tr>
		<tr>
		  <td colspan="2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><em>*Ongkos kirim menggunakan jasa TIKI </em></font></td>
		  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Rp 25000 </font></td>
		  </tr>
		<tr>
			<td colspan="2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>TOTAL</b></font></td>
			<? 
			$tiki='25000';
			$jumlah=$total+$tiki; 
			?>
			<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><? echo "Rp ".$jumlah; ?></b></font></td>
		</tr>
		<tr>
			 <td colspan="4">
			 <p align="center">&nbsp;</p>
			 
			 <?
			 $user=mysql_db_query($db,"select * from daftar where id='$iduser'",$koneksi);
			 
			 while ($row=mysql_fetch_array($user))
			 {
				$nama=$row['nama'];
				$email=$row['email'];
				$alamat=$row['alamat'];
				$kota=$row['kota'];
				$kodepos=$row['kodepos'];
				$provinsi=$row['provinsi'];
				$telpon=$row['telpon'];
			 }
			 ?>
			 <h3 align="center">Data Pemesan</h3>
			<table width="421" border="0" align="left">
			<tr>
			<td width="128"><font face="verdana" size="2">Nama Lengkap</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $nama; ?></font></td>
			</tr>
			
			<tr>
			<td valign="top"><font face="verdana" size="2">Email</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $email; ?></font></td>
			</tr>
			
			<tr>
			<td><font face="verdana" size="2">Alamat</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $alamat; ?></font></td>
			</tr>
			
			<tr>
			<td><font face="verdana" size="2">Kota</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $kota; ?></font></td>
			</tr>
			
			<tr>
			<td><font face="verdana" size="2">Provinsi</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $provinsi; ?></font></td>
			</tr>
			<tr>
			<td><font face="verdana" size="2">Telpon (HP)</font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><? echo $telpon; ?></font></td>
			</tr>
			<tr><td colspan="4" align="center"><p>&nbsp;
			  </p>
				<p>
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

			
			 </td>
		</tr>
		</table>
		