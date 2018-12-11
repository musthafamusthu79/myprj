<?php 
$val=$_GET['serialnum'];
$link=mysqli_connect('localhost','root','','db_musthafa');
if (!$link){
    die("Error in connnection".mysqli_connect_error());
}
echo $fi="select imagename from tbl_register where Serial_no=$val";
$name1=mysqli_query($link, $fi);
$name2=mysqli_fetch_row($name1);
$query="delete from tbl_register where Serial_no=$val";
$result=mysqli_query($link, $query);
if(!$result)
    die("Error in query".mysqli_error($link));
else {
    echo "Deleted Successfull";
    unlink("images/$name2[0]");
    header("location:listpage.php");
}
?>