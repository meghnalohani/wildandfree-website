<?php

session_start();

echo '<link rel="stylesheet" href="main.css" />';

$error = $id = $sname = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql=new mysqli("localhost","root","system");
    mysqli_select_db($sql,"wildandfree");

    $id=$_POST["IDn"];
    $sname=$_POST["sname"];

    if((empty($id)) and (empty($sname)))
            $error="Please fill at least 1";

    elseif(strlen($id)>0){
        $check=$sql->query("select * from species where id='$id'");
        if($check->num_rows==0)
            $error="No such entry with that ID exists";
        else
        {
            $del=$sql->query("delete from species where id='$id'");
            if ($del === TRUE)
               { $_SESSION["message"]="Entry deleted successfully";
                header("Location: http://localhost/DBMS/admin-login.php");}
        }
    }

    elseif(strlen($sname)>0)
    {
        $check=$sql->query("select * from species where sname='$sname'");
        if($check->num_rows==0)
            $error="No such entry with that name exists";
        else
        {
            $del=$sql->query("delete from species where sname='$sname'");
            if ($del === TRUE)
                $message="Entry deleted successfully";
        }
    }
}

?>

<style>

.form,.form td,.form tr{
    border: 0px;
	background-color: white;
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
                <td colspan=2><h3> Fill any one </h3></td>
</tr>
<tr>
                <td><font color="red"><?php echo $error; ?></td>
                <td><?php echo $message; ?></td>
            </tr>

                <tr>
                    <td>ID: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="IDn" id="name" placeholder="ID" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Scientific Name: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="sname" id="name" value="" placeholder="Scientific Name" />
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td align="right"><input type="submit" value="remove" class="Button special" /></td>
                    <td><input type="reset" value="Reset" class="alt" /></td>
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