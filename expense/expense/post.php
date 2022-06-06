<?php
$con = mysqli_connect('localhost','root','','ajax');
if (isset($_POST['submit'])) {
    echo $date = $_POST['date'];
    echo '<br>';
echo $name = $_POST['e_name'];
echo '<br>';

echo $ammount = $_POST['e_ammount'];


 
 $sql = mysqli_query($con,"INSERT INTO `exoense` (`expanse_name`, `ammount`, `date`)
VALUES ('$name', '$ammount', '$date')");
}
?>

