<!DOCTYPE html>
<html lang  ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays and operators</title>

</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
    $days = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    for($i = 0; $i < count($days); $i++) {
        echo "<p>$days[$i]</p>";
    }