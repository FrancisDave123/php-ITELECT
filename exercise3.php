<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <!--
    Create a program that convert the temperature from Fahrenheit to Celcius with remark. Use the table below for the temperature remark.

    -----------------------------------------
    |    Temperature    |       Remark      |
    -----------------------------------------
    |  0 and below      |  Freezing point   |
    -----------------------------------------
    |  100 and above    |  Boiling point    |
    -----------------------------------------
    |  1 to 25          |  Cold             |
    -----------------------------------------
    |  26 to 40         |  Warm             |
    -----------------------------------------
    |  41 to 99         |  Hot              |
    -----------------------------------------

    Fahrenheit to Celcius formula: °C = (°F - 32) × 5/9

    Sample Case #1:
    Fahrenheit: 80

    Celcius: 26.67
    Remarks: Warm

    Sample Case #2:
    Fahrenheit: 200

    Celcius: 93.33
    Remarks: Hot
    -->

    <h1>Exercise 3</h1>
    <form action="">
        Fahrenheit: 
        <input type="text" name = "fahrenheit" method = "get"> <button>Convert</button>
    </form><br /><br />
    <?php
        if(isset($_GET["fahrenheit"])){
            $fahrenheit = $_GET["fahrenheit"];
            $celsius = ($fahrenheit - 32) * (5/9);
        }
        if($celsius <= 0)
            $remark = "Freezing point";
        if($celsius >= 100)
            $remark = "Boiling point";
        if(1 <= $celsius && $celsius <= 25)
            $remark = "Cold";
        if(26 <= $celsius && $celsius <= 40)
            $remark = "Warm";
        if(41 <= $celsius && $celsius <= 99)
            $remark = "Hot";

    
        echo "Celcius: ", number_format($celsius,2),"<br />";
        echo "Remarks: ", $remark;
    ?>
</body>

</html>