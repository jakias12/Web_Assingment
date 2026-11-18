<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/php-for-beginers/form_data_submit/SECOND_PAGE.php"  method="GET">
        <label for="first_name"> First Name</label>
        <input type="text" id="first_name" placeholder="First Name" name="first_name" required>
        <br>
        <label for="last_name"> Last  Name</label>
        <input type="text" id="last_name" placeholder="Last Name" name="last_name" required>
        <br>
        <label for=""> Value 1</label>
        <input type="number" placeholder="Value 1" name="value_1" required>
        <br>
        <label for=""> Value 2</label>
        <input type="number" placeholder="Value 2" name="value_2" required>
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>

    <!-- <a href="/PHP_BEGINER/SECOND_PAGE.php"> Click Here For Second Page </a> -->
</body>
</html>


<?php
    echo " <br> Hello Dependent Of CSE <br> ";
?>