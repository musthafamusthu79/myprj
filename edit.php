<html>
<head>
<title>Edit page</title>
</head>
<body>
<?php 
if(isset($_GET['serialnum']))
    $val=$_GET['serialnum'];
$link=mysqli_connect('localhost','root','','db_musthafa');
if (!$link){
    die("Error in connnection".mysqli_connect_error());
}
$query="select * from tbl_register where Serial_no='$val'";
$result=mysqli_query($link, $query);
$res=mysqli_fetch_row($result);
printf('<form action="ered.php" method="post">
<table>
<tr><th>First Name</th><td><input type="text" value="'.$res[1].'" name="fn"></td></tr>
<tr><th>Last Name</th><td><input type="text" value="'.$res[2].'" name="ln"></td></tr>
<tr><th>City</th><td><input type="text" value="'.$res[3].'" name="cy"></td></tr>
<tr><th>District</th><td><input type="text" value="'.$res[4].'" name="dis"></td></tr>
<tr><th>State</th><td><input type="text" value="'.$res[5].'" name="st"></td></tr>
<tr><th>Date of Join</th><td><input type="date" value="'.$res[6].'" name="dob"></td></tr>
<tr><td colspan="2" style="text-align: center"><input type="submit" name="button" value="EDIT"></td></tr>
</table>
<input type="hidden" name="serial" value="'.$val.'">
</form>');
?>
<form action="listpage.php" method="post">
<table>
<tr><td colspan="2" style="text-align: center"><input type="submit" name="button" value="List-Page"></td></tr>
</table>
</form>
</body>
</html>