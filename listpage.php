<html>
<head>
<title>List Page</title>
</head>
<body>
<?php
$link=mysqli_connect('localhost','root','','db_musthafa');
if(!$link){
    die("not connected".mysqli_connect_error());
}
//$query="select * from tbl_register";
echo '<table>
<tr><th>First Name</th><th>Last Name</th><th>City</th><th>District</th><th>State</th><th>Date of birth</th></tr>';
$result=mysqli_query($link, "select * from tbl_register");
while ($res=mysqli_fetch_array($result)) {
    printf("<tr><td>".$res[1]."</td><td>".$res[2]."</td>
    <td>".$res[3]."</td><td>".$res[4]."</td><td>".$res[5]."</td>
    <td>".$res[6]."</td><td><img alt='No Image' src='images/".$res[7]."' height='100' width='100'></td>
    <td><a href='edit.php?serialnum=".$res[0]."'>EDIT</a></td>
    <td><a href='delete.php?serialnum=".$res[0]."'>DELETE</a></td>
    <td><a href='upp1.php?img=".$res[7]."&serialnum=".$res[0]."'>ChangeImage</a></td></tr>");
}
echo '</table>';
?>
<form action="create.php" method="post">
<table>
<tr><td colspan="2" style="text-align: center"><input type="submit" name="button" value="Create Entry"></td></tr>
</table>
</form>
</body>
</html>