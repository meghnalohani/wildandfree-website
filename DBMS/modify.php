<?php


echo '<link rel="stylesheet" href="main.css" />';

$error=$id='';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sql=new mysqli("localhost","root","system","wildandfree");

    if(empty($_POST["IDn"]))
    {
        $error = "ID must be entered";
    }

    else
    {
        $id=$_POST["IDn"];
        session_start();
        $match=$sql->query("select * from species where id='$id'");
        if($match->num_rows==0)
            $error="No such ID exists";
        else{
            $_SESSION["ID"]=$id;
            header("Location: http://localhost/dbms/m1.php");
        }
    }
}

?>

<style>

.form,.form td,.form tr{
    border: 0px;
	background-color: white;
}

#enter{
    width:15%;
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
    
    <form method="post">
        <table class="form">
            <tr>
                <td id="enter">Enter ID to be modified:</td>
                <td><input type="text" name="IDn" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="submitid" class="Button special"></td>
            </tr>
            <tr>
                <td><font color='red' size=2><?php echo $error; ?></td>
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