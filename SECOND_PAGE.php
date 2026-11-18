<?php
// echo "This is Second Page <br>";
echo " Second Page <br>";
echo $_GET['first_name'];
echo "<br>";
echo $_GET['last_name'];
echo "<br>";
$val1=$_GET['value_1'];
$val2=$_GET['value_2'];
echo $_GET['value_1']+$_GET['value_2']."<br>";

echo $val1 + $val2;
?>

<br> <a href="/php-for-beginers/form_data_submit/FIRST_FORM.php"> Go to First Page </a>