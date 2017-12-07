<?php 

echo '<link rel="stylesheet" href="main.css" />';

session_start();
$id=$_SESSION["ID"];
$_SESSION["message"]="Entry modified";
$descrc = $message = $genusc = $typec = $cnamec = $snamec = $nathabc = $locationc = $usgc = "";
$sql = new mysqli("localhost","root","system","wildandfree");

$search=$sql->query("select * from species where id='$id'");
while($row=$search->fetch_assoc())
{
    $descrc = $row["descr"];
    $genusc = $row["genus"];
    $typec = $row["type"];
    $cnamec = $row["cname"];
    $snamec = $row["sname"];
    $nathabc = $row["nathab"];
    $locationc = $row["location"];
    $usgc = $row["usg"];
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $descr = $_POST["d"];
    $genus = $_POST["g"];
    $type = $_POST["t"];
    $cname = $_POST["cn"];
    $sname = $_POST["sn"];
    $nathab = $_POST["nh"];
    $location = $_POST["l"];
    $usg = $_POST["u"];

    $u=$sql->query("update species set cname='$cname' where id='$id'");
    $u=$sql->query("update species set sname='$sname' where id='$id'");
    $u=$sql->query("update species set descr='$descr' where id='$id'");
    $u=$sql->query("update species set genus='$genus' where id='$id'");
    $u=$sql->query("update species set type='$type' where id='$id'");
    $u=$sql->query("update species set nathab='$nathab' where id='$id'");
    $u=$sql->query("update species set location='$location' where id='$id'");
    $u=$sql->query("update species set usg='$usg' where id='$id'");

    header("Location: http://localhost/DBMS/admin-login.php");
}

?>

<style>

.form,.form td,.form tr{
    border: 0px;
	background-color: white;
}

.wi{
    width:40%;
}

.form{
    margin-left:1px;
	margin-top: 1px;
	margin-bottom: 150px;
}

</style>

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

<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
<table class="form">
    <tr>
        <td></td>
        <td><?php echo $message; ?></td>
</tr>
<tr>
    <td class="wi">Common Name: </td>
    <td><input type="text" value="<?php echo $cnamec; ?>" name="cn"></td>
</tr>
<tr>
    <td class="wi">Scientific Name: </td>
    <td><input type="text" value="<?php echo $snamec; ?>" name="sn"></td>
</tr>
<tr>
    <td class="wi">Natural Habitat: </td>
    <td><textarea name="nh"><?php echo $nathabc; ?></textarea></td>
</tr>
<tr>
    <td class="wi">Description: </td>
    <td><textarea name="d"><?php echo $descrc; ?></textarea></td>
</tr>
<tr>
    <td class="wi">Usage: </td>
    <td><textarea name="u"><?php echo $usgc; ?></textarea></td>
</tr>
<tr>
    <td class="wi">Location: </td>
    <td><textarea name="l"><?php echo $locationc; ?></textarea></td>
</tr>
<tr>
    <td class="wi">Genus: </td>
    <td><input type="text" value="<?php echo $genusc; ?>" name="g"></td>
</tr>
<tr>
    <td class="wi">Type: </td>
    <td><input type="text" value="<?php echo $typec; ?>" name="t"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="modify" class="Button special" name="mod"></td>
</tr>
</table>
</form>

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