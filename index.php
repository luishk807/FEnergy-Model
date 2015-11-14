<?php
session_start();
include "include/function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Jane Doe's Sitet</title>
<?Php
include "include/requiredlib.php";
?>
</head>
<body <?php include "include/preloaders.php"; ?>>
<?php
if(detectAgent())
{
	?>
    <div id="socialicons" style="position:absolute; left:65%">
    	<a href=''><img src="images/face.png" alt="Facebook Link" border="0" /></a>&nbsp;&nbsp;<a href=''><img src="images/twi.png" border="0" alt="Twitter Link" /></a>
    </div>
    <?php
}
?>
<!--modal window content-->
<div id="boxes">
	<?php
		include "include/modalbox.php";
	?>
     <!-- Do not remove div#mask, because you'll need it to fill the whole screen --> 
    <div id="mask"></div>
</div>
<!--end modal window content-->
<!--carrousel section-->
<div id="wrap">
    <ul id="mycarousel" class="jcarousel-skin-tango">
      <!-- The content will be dynamically loaded in here -->
		<?php 
			include "include/cimages.php";
		?>
    </ul>
</div>
<!--end of carrousel section-->
<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%">
  <param name="movie" value="flash/main.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="8.0.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="flash/main.swf" width="100%" height="100%">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.0"/>
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
    	<div id="main_cont">
          <div id="staticbody">
            <div id="flashm">You Are Currently Viewing Our Non-Flash Version.  To View This Page At Its Best, Please Download The Newest Flash Player For Your Browser By Clicking <a href='http://get.adobe.com/flashplayer/' class='flashmlink'>Here</a>.</div>
            <div id="socialicons" style="position:absolute; left:80%">
    	<a href=''><img src="images/face.png" alt="facebook link" border="0" /></a>&nbsp;<a href=''><img src="images/twi.png" border="0" alt="Twitter Link" /></a>
    		</div>
            <div id="statisheader" style="margin-top:5px;"><img src="images/main_titleb.png" alt="logo" border="0" /></div>
            <br/>
            <div id="staticmenu">
                <a href="Javascript:loadModal('#about')" onmouseover="document.about.src='images/btnabout_rol.png'" onmouseout="document.about.src='images/btnabout.png'"><img src="images/btnabout.png"  border="0" alt="About" name="about" /></a>
                <br/>
                <br/>
                <a href="Javascript:loadModal('#contact')" onmouseover="document.contact.src='images/btncontact_rol.png'" onmouseout="document.contact.src='images/btncontact.png'"><img src="images/btncontact.png"  border="0" alt="Contact" name="contact" /></a>
                <br/>
                <br/>
                <a href="Javascript:loadModal('#event')" onmouseover="document.eventx.src='images/btnevent_rol.png'" onmouseout="document.eventx.src='images/btnevent.png'"><img src="images/btnevent.png"  border="0" alt="Event" name="eventx" /></a>
            </div>
        </div>
        </div>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>