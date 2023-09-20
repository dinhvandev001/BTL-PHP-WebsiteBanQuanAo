<?php
ob_start();
session_start();
include("../includes/config.php");
include("../includes/function.php");
include("modules/header/header.php");
if (isset($_GET['mod'])) {
	$module = $_GET['mod'];
	switch ($module) {
		case "product":
			include("modules/product/product.php");
			break;
		case "about":
			include("modules/about/about.php");
			break;
		case "contact":
			include("modules/contact/contact.php");
			break;
		case "member":
			include("modules/member/member.php");
			break;
		case "cart":
			include("modules/cart/cart.php");
			break;
		default:
			include("modules/home/home.php");
			break;
	}
} else {
	include("modules/home/home.php");
}
include("modules/footer/footer.php");