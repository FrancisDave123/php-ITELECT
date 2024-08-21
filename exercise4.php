<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "">
    Starting number:
    <input type = "number" name = "startingNum" ></input><br><br>
    Ending number:
    <input type = "number" name = "endingNum" ></input><br><br>
    <input type = "submit" value = "Display"></input><br><br>

    <?php
        if(isset($_GET["startingNum"]) && isset($_GET["endingNum"]))
        {
            $startingNum = $_GET["startingNum"];
            echo "Starting Number: $startingNum"; ?><br><br><?php
            $endingNum = $_GET["endingNum"];
            echo "Ending Number: $endingNum"; ?><br><br><?php

            if($startingNum <= $endingNum)
            {
                echo "Odd numbers: ";
                for($i = $startingNum; $i <= $endingNum; $i++)
                {
                    if($i % 2 != 0)
                        echo "$i " ;
                } 
                ?><br><br><?php

                echo "Even numbers: ";
                for($i = $startingNum; $i <= $endingNum; $i++)
                {
                    if($i % 2 == 0)
                        echo "$i " ;
                }
                ?><br><br><?php

                echo "Divisible by 3 Numbers: ";
                for($i = $startingNum; $i <= $endingNum; $i++)
                {
                    if($i % 3 == 0)
                        echo "$i " ;
                }
                ?><br><br><?php
                
                echo "Divisible by 5 Numbers: ";
                for($i = $startingNum; $i <= $endingNum; $i++)
                {
                    if($i % 5 == 0)
                        echo "$i " ;
                }

                ?><br><br><?php
            }
            elseif($startingNum >= $endingNum)
            {
                echo "Odd numbers: ";
                for($i = $startingNum; $i >= $endingNum; $i--)
                {
                    if($i % 2 != 0)
                        echo "$i " ;
                } 
                ?><br><br><?php

                echo "Even numbers: ";
                for($i = $startingNum; $i >= $endingNum; $i--)
                {
                    if($i % 2 == 0)
                        echo "$i " ;
                }
                ?><br><br><?php

                echo "Divisible by 3 Numbers: ";
                for($i = $startingNum; $i >= $endingNum; $i--)
                {
                    if($i % 3 == 0)
                        echo "$i " ;
                }
                ?><br><br><?php
                
                echo "Divisible by 5 Numbers: ";
                for($i = $startingNum   ; $i >= $endingNum; $i--)
                {
                    if($i % 5 == 0)
                        echo "$i " ;
                }
            }
            
        }

    ?>
    </form>
</body>
</html>