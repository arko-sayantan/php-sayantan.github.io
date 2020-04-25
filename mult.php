<html>
<title>Multiplication Table</title>
<body bgcolor="lightyellow">
    <form action="" method="POST">
    Number:   <input type="text" name="number" placeholder="Enter your number"><br>
    Range:    <input type="text" name="range" placeholder="enter the range">
    <input type="submit" name="btn" value="print table" >
    </form>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
    $number=$_POST['number'];
    $range=$_POST['range'];
    $mul=1;

    for($i=1;$i<=$range;$i++)
    {
        $mul=$number*$i;
        echo($number."*".$i."=".$mul);
        echo"<br>";
    }
}
?>