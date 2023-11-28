<?php
$server="localhost";
$username="root";
$pwd="";
$dbname="php";
$con=mysqli_connect($server,$username,$pwd,$dbname) or die ('db not connected');
$name=$_POST['n1'];
$fname=$_FILES['fpath']['name'];
$tempf=$_FILES['fpath']['tmp_name'];
$fsize=$_FILES['fpath']['size'];
$fdir="images/";
$fpath=$fdir.$fname;
if(move_uploaded_file($tempf,$fpath))

{
    $que="insert into emp values(null,'$name','$fpath')";
    $res=mysqli_query($con,$que);
    echo"inserted sucess";
}
else{
    echo"error";
}


?>