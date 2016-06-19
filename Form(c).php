<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="style.css"/>
<title>Member Registration</title>
<?php
$servername = "localhost";
$username = "Nicole";
$password = "Molly0208";
$dbname = "players_db"
function connect_db($servername, $username, $password, $dbname)
{
$connection = @mysql_connect($servername, $username, $password)
or die('connection problem:' . mysql_error());

return $connection;
}

?>
</head>
<body>

<h1>Board Games Aficionados</h1>
<h2>Member Registration</h2>
<form name="registration" id="registration" method="post" action="http://students.open.ac.uk/mct/tt284/reflect/reflect.php">
<p>
Membership Number:<input type="text" name="membershipNumber" id="Number" tabindex="1" placeholder="BA1234" size="20" maxlength="50" required/><br/>
First Name:   <input type="text" name="firstname" id="firstName" tabindex="2" placeholder= "Joe" pattern="[A-Z]{1}[a-z]{0,20}" title="Otto" size="20" maxlength="50" required /><br/>
Last Name:    <input type="text" name="lastname" id="lastName" tabindex="3" placeholder="Blogs" size="20" pattern="[A-Z]{1}[a-z]{0,40}" title="Smith" maxlength="50"required/><br/>
Email:        <input type="text" name="email" id="emailAd" tabindex="4" placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="20" maxlength="50" required/><br/>
Phone Number: <input type="text" name="phonenumber" id="phoneNumber" tabindex="5" placeholder="063456123" pattern="[0-9]{1,12}" title="021789456" size="20" maxlength="50" required/><br/> 
<br/>
<input type="submit" tabindex="6" value="Submit Form"/>
</p>
</form>
</body>
</html>