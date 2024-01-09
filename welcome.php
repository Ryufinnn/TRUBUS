<html>
<head><title>Welcome to Web GIS-Endemik</title>
</head>
<body>
<table>
<tr>
	<td>
	<blockquote>
	<font face="Arial, Helvetica, sans-serif" color="#000000" size="2"><h4>
	  <script language="JavaScript" type="text/javascript">
		<!--
		var message="Selamat Datang..."
		var neonbasecolor="white"
		var neontextcolor="black"
		var flashspeed=100  //dalam milisekon
		
		var n=0
		if (document.all||document.getElementById){
		document.write('<font color="'+neonbasecolor+'">')
		for (m=0;m<message.length;m++)
		document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
		document.write('</font>')
		}
		else
		document.write(message)
		
		function crossref(number){
		var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
		return crossobj
		}
		
		function neon(){
		
		//Mengubah semua karakter ke warna dasar
		if (n==0){
		for (m=0;m<message.length;m++)
		//eval("document.all.neonlight"+m).style.color=neonbasecolor
		crossref(m).style.color=neonbasecolor
		}
		
		//bergantian dan merubah karakter ke warna yang lain
		crossref(n).style.color=neontextcolor
		
		if (n<message.length-1)
		n++
		else{
		n=0
		clearInterval(flashing)
		setTimeout("beginneon()",1500)
		return
		}
		}
		
		function beginneon(){
		if (document.all||document.getElementById)
		flashing=setInterval("neon()",flashspeed)
		}
		beginneon()
		//-->
	</script>
	</h4>
	</font>
	<table align="left">
	  <tr>
	  	<td width="755" valign="top"><div align="left"><font face="verdana" size="2"><font size="2">Selamat datang di Pemasaran Keripik Daerah Kampar </font> </font></div></td>
		<td width="125">&nbsp;</td>
	  </tr>
	  <tr>
	  	<td colspan="2">
			<p>&nbsp;</p>
			<table border="0" align="center" cellspacing="2" cellpadding="4" bordercolorlight="#FFCC00" style="border:dotted">
			<tr>
				<td bgcolor="#FFFFFF">
				  <div align="center"><em><font color="#FF9933" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			        <strong>Sebelum melakukan transaksi, silahkan Anda daftar dan Login terlebih dahulu.				</strong></font></em></div></td>
			</tr>
			</table>
		</td>
	  </tr>
	  <tr>
	  	<td colspan="2" align="center">
			<? include "promo.php"; ?>
		</td>
	  </tr>
	  </table>
	  
	 
	</td>
</tr>
<tr>
	<td><center>
		<font color="#999999" size="1" face="verdana">Crated</font><font color="#999999" size="1" face="verdana"> by Rinita Pratiwo <br> 
		© copyright 2015 Pemasaran Kripik Kampar  </font><font color="#999999">
		</p>
 	    </font>
	</center>
	</td>
</tr>
</table>
</body>
</html>



