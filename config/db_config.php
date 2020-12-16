<?php
$conn=mysqli_connect("localhost","sudipta","love","pizza");
if($conn){
}else{
    echo("NOT CONNECTED ".mysqli_connect_error());
}
?>