<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Global Patent Group, LLC.</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('img/home-b.gif','img/services-b.gif','img/about-b.gif','img/contact-b.gif')">
<div id="wrapper">
    <div class="column1">
      <div id="navigation">
        <?php include('navlink.php') ?>
      </div>
    </div>
    <div class="column2">
      <div id="header">
        <div align="center">
          <p><img src="img/GPG-newlogo.gif" alt="Global Patent Group, LLC. Logo" width="109" height="111" /></p>
          <p><span class="style3">GLOBAL PATENT GROUP, LLC. </span></p>
        </div>
      </div>
      <div id="content">
        <div align="center">
          <p><br />
          <img src="img/za_1.2.jpg" alt="" width="395" height="175" /></p>
          <p align="left">These materials have been prepared by Global Patent Group, LLC. for   informational purposes only and are not legal advice.&nbsp; Transmission of   the information is not intended to create, and receipt does not   constitute, an attorney-client relationship.&nbsp; Internet subscribers and   online readers should not act upon this information without seeking   professional counsel.<br />
            <br />
            <br />
          </p>
        </div>
      </div>
    </div>
    <div class="column1">
      <div id="info-column"><?php include('info-column.php') ?></div>
    </div>
	<div id="footer"><?php include('footer.php') ?></div>
</div>
</body>
</html>
