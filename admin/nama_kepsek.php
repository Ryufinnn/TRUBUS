<?php
session_start();
if (empty($_SESSION['user_id']) AND empty($_SESSION['pass'])){
/////header ('location:home.php');
}
else {

}	

include ("fungsi.php");
if ($_GET['act']=="del") hapus_daftar();		  
				  
?>

				  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: Laporan Daftar :.</title>
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
.style2 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>


		<?php
		///////include ("header.php");
		?>
			  <?php
			  //////include ("menu.php");
			  ?>
			  </th>
            </tr>
          </table>
          <table width="30%" height="150" border="0" align="center">
            <tr>
              <td bgcolor="#1D3482"><p align="center">
			  
			<table width="30%" border="0">
  <tr>
    <td width="32%">&nbsp;</td>
    <td width="35%">
				  <?
			include ("./include/conn.php");

			?>
<form action="print_lap.php" method="post" target="_blank">
  <table width="463" border="0">
    <tr>
      <td colspan="2"></td>
    </tr>
     <tr>
      
      <td width="163">ADMINISTRASI</td>
      <td width="290"><label>
        <input name="nmk" type="text" id="nmk">
      </label></td>
    </tr>
    <tr>
      
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
	<td>&nbsp;  </td>
	  <td>  
        
            <div>
              <input type="submit" name="Submit" value="Go">
              </div></td>
	  
    </tr>
  </table>
</form>	
	
	
	</td>
    <td width="33%">&nbsp;</td>
  </tr>
</table>

			
				</p></td>
            </tr>
          </table>
		
		  </th>
      </tr>
    </table>
	  <table width="1000" border="0" align="center">
        <tr>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>