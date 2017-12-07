<?php
//error_reporting(0);

echo '<link rel="stylesheet" href="main.css" />';

$fnerror = $lnerror = $unerror = $passerror = $emailerror = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$c=0;
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$un=$_POST["uname"];
$pass=$_POST["pass"];
$email=$_POST["email"];

$sql=new mysqli("localhost","root","system");
mysqli_select_db($sql,"wildandfree");

if(empty($fn))
$fnerror="First name required";
else
{
if(!preg_match("/^[a-z]+$/i",$fn))
    $fnerror="Enter valid name";
else
    $c++;
}

if(empty($ln))
$lnerror="Last name required";
else
{
if(!preg_match("/^[a-z]+$/i",$ln))
    $lnerror="Enter valid name";
else
    $c++;
}

if(empty($un))
$unerror="Username required";
else
{
$matchuname=$sql->query("SELECT * FROM user WHERE uname = '$un'");

if(strlen($un)>10)
    $unerror="Max length is 10 characters";
elseif(!preg_match("/^[A-Za-z]{1}[-'._A-Za-z0-9]{0,9}$/i",$un))
    {
        if(!preg_match("/^[A-Za-z]{1}/",$un))
            $unerror="Username must start with an alphabet";
        elseif(preg_match("/[-_'.]$/",$un))
            $unerror="Username cannot end with a symbol";
        else
            $unerror="Allowed symbols are _ - ' .";
    } 
elseif($matchuname->num_rows>0)
{
    $unerror="Username already taken";
}  
else
    $c++;
}

if(empty($pass))
$passerror="Password required";
else
{
if(strlen($pass)>30)
    $lnerror="Password too long";
else
    $c++;
}

if(empty($email))
$emailerror="Email required";
else
{
    $matchemail=$sql->query("SELECT * FROM USER WHERE email='$email'");
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    $emailerror="Enter valid email";
else if($matchemail->num_rows>0)
    $emailerror="Email already registered";
else
    $c++;
}
if($c==5)
{
    $insert = "insert into user values ('$fn','$ln','$un','$pass','$email')"; 
    if ($sql->query($insert) === TRUE) 
    {     echo "<p align='center'><br><br><br>You have registered successfully.<br>
                <a href='login.php'>Login</a>"; 
                header("Location: http://localhost/DBMS/login.php"); /* Redirect browser */
exit();} 
    else 
    {     echo "Error: " . $insert . "<br>" . $sql->error; }
}
}

?>

<html>
	<head>
		<title>Wild and Free - Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body class="subpage">
            <header id="header">
                    <div class="logo"><span>Wild and Free</span></div>
            </header>

            <div class="6u$ 12u$(medium)">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <table class="registertable">
                        <tr>
                            <td width="25%">First Name:</td>
                            <td width="50%"><input type="text" name="fname" value="" placeholder="First Name"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $fnerror ?></td>
                        </tr>
                        <tr>
                            <td width="25%">Last Name:</td>
                            <td width="50%"><input type="text" name="lname" value="" placeholder="Last Name"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $lnerror ?></td>
                        </tr>
                        <tr>
                            <td width="25%">Username:</td>
                            <td width="50%"><input type="text" name="uname" value="" placeholder="Username"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $unerror ?></td>
                        </tr>
                        <tr>
                            <td width="25%">Password:</td>
                            <td width="50%"><input type="password" name="pass" value="" placeholder="Password"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $passerror ?></td>
                        </tr>
                        <tr>
                            <td width="25%">Email ID:</td>
                            <td width="50%"><input type="text" name="email" value="" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $emailerror ?></td>
                        </tr>
                        <tr>
                            <td align="right"><input type="submit" value="Register" class="Button special" /></td>
                            <td><input type="reset" value="Reset" class="alt" /></td>
                        </tr>
                        </table>
                </form>
            </div>
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