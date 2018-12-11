<html>
<head>
<title>Adding Row</title>
</head>
<body>
<?php 
date_default_timezone_set("Asia/Calcutta");
echo date("d/m/Y h;i;s");
?>
<form action="create.php" method="post" enctype="multipart/form-data">
<table>
<tr><th>First Name</th><td><input type="text" name="fn"></td></tr>
<tr><th>Last Name</th><td><input type="text" name="ln"></td></tr>
<tr><th>City</th><td><input type="text" name="cy"></td></tr>
<tr><th>District</th><td><input type="text" name="dis"></td></tr>
<tr><th>State</th><td><input type="text" name="st"></td></tr>
<tr><th>Uplaod Image</th><td><input type="file" name="image"></td></tr>
<tr><th>Date of Join</th><td><input type="date" name="dob"></td></tr>
<tr><td colspan="2" style="text-align: center"><input type="submit" name="button" value="Create"></td></tr>
</table>
</form>
<form action="listpage.php" method="post">
<table>
<tr><td colspan="2" style="text-align: center"><input type="submit" name="button" value="List-Page"></td></tr>
</table>
</form>
<?php 
$link=mysqli_connect('localhost','root','','db_musthafa');
if(!$link){
    die("not connected".mysqli_connect_error());
}
if (isset($_POST['button']))
    if($_POST['button']=="Create") {
        $a=$_POST['fn'];
        $b=$_POST['ln'];
        $e=$_POST['cy'];
        $f=$_POST['dis'];
        $g=$_POST['st'];
        $h=$_POST['dob'];
        $file_name = $_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $n=rand(1000,10000);
        $file_name="$n.$file_name";
        move_uploaded_file($file_tmp,"images/".$file_name);
        
        $query="insert into tbl_register values('','$a','$b','$e','$f','$g','$h','$file_name')";
        if (mysqli_query($link, $query)) {
            echo "SuccessFully Registered";
        }
        else
            echo "Error occured".mysqli_error($link);
    }
?>
</body>
</html>