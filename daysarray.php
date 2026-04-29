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
echo "<p>The days of the week in English are: </p>";
$daysEnglish = array("Sunday,", "Monday,", "Tuesday,", "Wednesday,", "Thursday,", "Friday,", "Saturday.");
for ($i = 0; $i < count($daysEnglish); $i++) {
    echo "$daysEnglish[$i] ";
}

echo "<br><br>"; // spacing


echo "<p>The days of the week in French are: </p>";
$daysFrench = array("Dimanche,", "Lundi,", "Mardi,", "Mercredi,", "Jeudi,", "Vendredi,", "Samedi.");
for ($i = 0; $i < count($daysFrench); $i++) {
    echo "$daysFrench[$i] ";
}
?>
