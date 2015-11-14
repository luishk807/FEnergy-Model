<?php
if(detectAgent())
{
	?>
    <link rel="stylesheet" type="text/css" href="css/stylen.css" />
    <?php
}
else
{
	?>
    <link rel="stylesheet" type="text/css" href="css/stylen_mobile.css" />
    <?php
}
?>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/styleie.css" />
<![endif]-->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script><!--script library jquery-->
<script type="text/javascript" src="js/thickbox.js"></script><!--script for image modal pop up-->
<script type="text/javascript" src="js/carrousel/jquery.jcarousel.min.js"></script> <!--carrousel script-->
<!--script for the jqueryscrollbar-->
<script type="text/javascript" src="js/jscrollbar/ui.core-1.7.2.js"></script>
<script type="text/javascript" src="js/jscrollbar/ui.draggable-1.7.2.js"></script>
<script type="text/javascript" src="js/jscrollbar/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jscrollbar/plugin.scrollbar.js"></script>
<!--end of script-->
<script type="text/javascript" src="js/jscript.js"></script> <!--script-->
<link rel="stylesheet" type="text/css" href="images/jc_skins/tango/skin.css" />
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<style>
.jcarousel-skin-tango .jcarousel-container-horizontal {
    width: 85%;
	margin-left:5%;
}

.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width: 100%;
}
</style>