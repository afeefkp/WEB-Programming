<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h4>Enter the consumer number</h4>
        <input type="text" name="consno"><br>
        <h4>Enter the unit:</h4>
        <input type="text" name="unitused"><br>
        <h4>enter the area:</h4>
        <select name="areas">
            <option value="Rural">Rural</option>
            <option value="Residential">Residential</option>
            <option value="Commercial">Commercial</option>
        </select>
        <input type="submit" name="submit">   
    </form>


</body>

</html>

<?php
if (isset($_POST['submit'])) {   
    $consumernumber = $_POST['consno'];
    $unit = $_POST['unitused'];
    $area = $_POST['areas'];

    if ($area == "Rural") {
        $ch = 10;
        if ($unit > 0 && $unit < 50) {
            $charge = (.50 * $unit) + $ch;
        } elseif ($unit > 50 && $unit < 150) {
            $charge = (.50 * $unit) + $ch;
        } else {
            $charge = (.50 * $unit) + $ch;
        }
        echo "***** billing details ***** <br>";
        echo "consumer number : " . $consumernumber . "<br>";
        echo "unit consumed : " . $unit . "<br>";
        echo "Total charge to be paid : " . $charge . "<br>";
    } elseif ($area == "Residential") {
        $ch = 15;
        if ($unit > 0 && $unit < 50) {
            $charge = (.75 * $unit) + $ch;
        } elseif ($unit > 50 && $unit < 150) {
            $charge = (.75 * $unit) + $ch;
        } else {
            $charge = (.75 * $unit) + $ch;
        }
        echo "***** billing details ***** <br>";
        echo "consumer number : " . $consumernumber . "<br>";
        echo "unit consumed : " . $unit . "<br>";
        echo "Total charge to be paid : " . $charge . "<br>";
    } else {
        $ch = 20;
        if ($unit > 0 && $unit < 50) {
            $charge = (.99 * $unit) + $ch;
        } elseif ($unit > 50 && $unit < 150) {
            $charge = (.99 * $unit) + $ch;
        } else {
            $charge = (.99 * $unit) + $ch;
        }
        echo "***** billing details ***** <br>";
        echo "consumer number : " . $consumernumber . "<br>";
        echo "unit consumed : " . $unit . "<br>";
        echo "Total charge to be paid : " . $charge . "<br>";
    }
    
}
?>