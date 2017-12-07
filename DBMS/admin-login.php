<?php

session_start();

echo '<link rel="stylesheet" href="main.css" />';
echo "<br><br><p align=\"center\">".$_SESSION["message"];

?>

<head>
		<title>ADMIN</title>
	</head>
    <body class="subpage">
		<header id="header">
				<div class="logo"><a href="home2.html"><span>Wild and Free</span></a></div>
				<a href="#menu">Menu</a>
		</header>
		<nav id="menu">
			<ul class="links">
				<li><a href="add.php">ADD ENTRY</a></li>
				<li><a href="remove.php">REMOVE ENTRY</a></li>
				<li><a href="modify.php">MODIFY ENTRY</a></li>
			<li><a href="http://localhost/DBMS/login.php">LOGOUT</a></li>
			</ul>
		</nav>

<footer id="footer">
                <div class="copyright">
                    IWP project by<br> Ishita Jaju<br>Meghna Lohani<br> Pooja Uplanchiwar
                </div>
            </footer>

            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>