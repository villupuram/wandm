<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/favicon.png" >
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/base.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/vendor.min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/main.css">     
	<script src="<?php $plxShow->template(); ?>/js/modernizr.js"></script>
</head>

<body>
   <header id="main-header">
   	<div class="row">
	      <div class="logo">
	         <a href=".">Pluxml</a>
	      </div>
	      <nav id="nav-wrap">         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class="menu-icon">Menu</span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class="menu-icon">Menu</span>
         	</a>            
	         <ul id="nav" class="nav">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
	         </ul> <!-- end #nav -->
	      </nav> <!-- end #nav-wrap -->
	      <ul class="header-social">
	        	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	        	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	        	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	      </ul>      
	   </div>
   </header> <!-- end header -->

