<?php 
include "lib/query.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
	 <head>
	 	<?php include "main/head.php"; ?>
	 	<title>Ticets</title>
	 </head>
	 <body class="hold-transtion sidebar-mini">
	 	<div class="wrapper">
	 		<header class="main-navbar head">
	 			<?php include "main/navbar.php"; ?>
	 		</header>
	 		<aside class="main-sidebar">
	 			<section class="sidebar">
	 				<?php include "main/sidebar.php"; ?>
	 			</section>
	 		</aside>
	 		<div class="content-wrapper">
	 			<?php
	 			$pages = isset($_GET['page'])?$_GET['page']:"dashboard";
	 			include "pages/".$pages.".php";
	 			?>
	 		</div>
	 	</div>
	 </body>
 </html>