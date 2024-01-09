<? session_start();

setcookie("counter","visitor",time()+3600); ?>

<html>
<head><title>SELAMAT DATANG</title>

</head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<body background="./img/czc2.jpg">
<p>&nbsp;</p>

<table width="1001" height="341" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr valign="top">
	<td height="18" colspan="7" align="center"><? include "./include/banner.php"; ?></td>
</tr>


<tr>
	<td width="10" valign="top" align="left"  background="./img/b-kiri.jpg">&nbsp;</td>
	<td width="30" valign="top" colspan="0" rowspan="0">
		<? include "menu1.php";?>
		<? include "menu2.php";?><br>
		<? include "counter.php"; ?><br>
		
	</td>
	
	<td width="23" valign="top" align="right" background="./img/b-kanan.jpg">&nbsp;</td>
	<td width="730" valign="top" align="center"><? include "isi.php" ?>	</td>		
	<td width="12" valign="top" align="right" background="./img/b-kiri.jpg">&nbsp;</td>
	<td width="166" valign="top" align="center"><br>
	<? 
	
	if (session_is_registered('user_id'))
	{
		include "status.php";
	}else{
		include "login.php";
	} 
	
	
	?>
	<br>
	<? include "voting.php"; ?><br>
	<? //include "./include/slide.php"; ?>
	<br><br>
	<a href="ymsgr:sendIM?mailizar"><img src="./img/pembayaran.jpg" width="256" height="197" border="0" title="YM : mailizar"> </a><br>
	<br>
	<a href="http://www.facebook.com/mailizar" target="_blank"></a> <br>
	<br>
	<a href="http://mailizar.ac.id" target="_blank"></a>	<br>
	<br></td>
	<td width="19" valign="top" align="right" background="./img/b-kanan.jpg">&nbsp;</td>
</tr>

<tr valign="top">
	<td height="18" colspan="7" align="center"><? include "./include/footer.php"; ?></td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>