<?php 
$link=mysqli_connect('localhost','root','','db_musthafa');
if (!$link){
    die("Error in connnection".mysqli_connect_error());
}
//if($_POST['button']=="EDIT") {
    //$a=$_POST['fn'];
    //$b=$_POST['ln'];
    //$e=$_POST['cy'];
    //$f=$_POST['dis'];
    //$g=$_POST['st'];
    //$h=$_POST['dob'];
    //$c=$_POST['serial'];
    //$query="update tbl_register set f_n='$a',l_n='$b',c_y='$e',d_t='$f',s_e='$g',d_b='$h' where Serial_no='$c'";
    $m=$_GET['a'];
    $n=$_GET['b'];
    $query="update tbl_std_acadamy set physics=$n where std_id=$m";
    if (mysqli_query($link, $query)) {
        echo "SuccessFully Registered";
        //header("location:listpage.php");
    }
    else
        echo "Error occured".mysqli_error($link);
//}
?>