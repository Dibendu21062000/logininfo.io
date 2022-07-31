<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name:<input type="text" name="nm"><br>
        Email:<input type="text" name="em"><br>
        <input type="submit" name="sb">
    </form>
    <?php
$con=mysqli_connect('localhost','root','','record');
if(isset($_POST['sb']))
{
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $query="INSERT INTO register(NAME,EMAIL) VALUES('$name','$email')";
    $run=mysqli_query($con,$query);
}
?>
</body>
</html>
