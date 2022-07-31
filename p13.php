<?php
$con=mysqli_connect('localhost','root','','connect');
if(isset($_POST['sb']))
{
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $query="INSERT INTO register(NAME,EMAIL) VALUES('$name','$email')";
    $run=mysqli_query($con,$query);
    // 'record' -> name of the database
    //  'register' -> name of the table, NAME and EMAIL are columns
}
?>