<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="keywords" content="green jelly, theme, free templates, nivo image slider, website, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly Theme, free CSS template provided by templatemo.com" />
<link href="<?php echo $base ?>/media/theme/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $base ?>/media/theme/images/small_logo.png">
<link rel="stylesheet" href="<?php echo $base ?>/media/theme/css/nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $base ?>/media/theme/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo $base ?>/media/theme/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base ?>/media/theme/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
        <div id="site_title">
        	<h1>Official Philippine Importer of Japan's Newlong Machines</h1>
        </div>
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="<?php echo base_url("cindex/index"); ?>">Home</a></li>
            <li><a href="<?php echo $base ?>/cproducts/products">Products</a>
                <ul>
                    <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                    <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                    <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                    <span></span>
                </ul>
            </li>
            <li><a href="<?php echo $base ?>/cindex/about">About us</a>
                <ul>
                    <li><a href="<?php echo $base ?>/cimaps/location">Our Offices</a></li>
                    <li><a href="<?php echo $base ?>/cimaps/direction">Locate us</a></li>
                    <li><a href="<?php echo $base ?>/cimaps/faq">FAQ's</a></li>
                	<span></span>
                </ul>
          	</li>
          	<li><a href="<?php echo $base ?>/cimaps/contact">Contact us</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
	<?php $this->load->view($content);?>
	
    <div id="templatemo_footer">
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div>

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	All rights reserved Copyright � 2013 <a href="#">The Philippine Newlong Corporation</a>. <a href="http://www.templatemo.com" target="_parent">Home</a> | 
    	<a href="http://www.templatemo.com" target="_parent">Products</a> | <a href="http://www.templatemo.com" target="_parent">About us</a> | <a href="http://www.templatemo.com" target="_parent">Contact us</a>
    </div>
</div>

</body>
</html>
