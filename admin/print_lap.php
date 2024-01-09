<?php
session_start();
if (empty($_SESSION['user_id']) AND empty($_SESSION['pass'])){
///header ('location:home.php');
}
else {

}	

include ("fungsi.php");
if ($_GET['act']=="del") hapus_daftar();		  
				  
?>
				  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: Laporan Semua Pemesan:.</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:113px;
	top:434px;
	width:797px;
	height:41px;
	z-index:1;
}
.style1 {color: #FFFFFF}
.style3 {color: #000000}
-->
</style>
</head>

<body onLoad=
javascript:window:print()

  <tr>
    <td><table width="100%" border="0" align="center">
      <tr>
        <th height="457" scope="col">
		<table width="84%" border="0" align="center" bordercolor="#000000">
       
            <th width="44%" ><p><strong><span class="style4">YOESANI SHOES</span><br>
			JL.SIMPANG LAPAI PARIAMAN<br>
			0751-480135</strong></p>
              <table cellspacing="4">
               
                       
              
              
       
		  
          <table width="100%" height="304" border="0" align="center">
            <tr>
              <td><table width="70%" border="1" align="center">
                <tr>
                  <td width="15%" bordercolor="#000000"><strong><div align="center" class="style3">ID pemesanan </div></td>
                  <td width="20%" bordercolor="#000000"><strong><div align="center" class="style3">Nama Pemesan</div></td>
                  <td width="20%" bordercolor="#000000" class="style1"><strong><div align="center" class="style3">Tanggal</div></td>
				  <td width="15%" bordercolor="#000000" class="style1"><strong><div align="center" class="style3">Kota</div></td>
				  <td width="20%" bordercolor="#000000" class="style1"><strong><div align="center" class="style3">Alamat </div></td>
                  <td width="20%" bordercolor="#000000" class="style1"><strong><div align="center" class="style3">telpon</div></td>
                 
                </tr>
				<?php
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
		
	</tr>";
	}
	?>
              </table>
                <p>
				<table width="70%" border="0" align="center">
  <tr>
    <td width="14%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="12%">&nbsp;</td>
    <td width="26%"><div align="center">Padang, <? echo date("d m Y");?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center">ADMINISTRASI</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"><b><u>( <?= $_POST[nmk]; ?> )</u></b> </div></td>
  </tr>
  <tr>
    
  </tr>
</table>

				</p></td>
            </tr>
          </table>
		
		  </th>
      </tr>
    </table>
	  <table width="800" border="0" align="center">
        <tr>
        </tr>
      </table>
    <p>	</p></td>
  </tr>
</table>
</body>
</html>