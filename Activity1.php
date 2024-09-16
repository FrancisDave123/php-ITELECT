<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Students Grades: <br>";
        $students = array(
            [
                'name' => 'john doe',
                'grade1' => 85,
                'grade2' => 90,
                'grade3' => 78,
            ],
            [
                'name' => "jane smith",
                'grade1' => 92,
                'grade2' => 88,
                'grade3' => 95,
            ],
            [
                'name' => "mark lee",
                'grade1' => 70,
                'grade2' => 65,
                'grade3' => 80,
            ]
        );

        foreach($students as $displayStudents){
            echo ucwords($displayStudents['name'].": ").
                 $displayStudents['grade1']. ", ".
                 $displayStudents['grade2']. ", ".
                 $displayStudents['grade3']. "<br>";
        }

        echo "<br>Students Averages and Status: <br>";

        $status = "";

        foreach($students as $displayStudents){

            $average = ($displayStudents['grade1'] + $displayStudents['grade2'] + $displayStudents['grade3']) / 3;

            if($average >= 90)
                $status = "Outstanding";
            elseif($average >= 75 && $average <= 89)
                $status = "Satisfactory";
            elseif($average < 75)
                $status = "Needs Improvement";


            echo ucwords($displayStudents['name']." - ").
                 "Average: ". number_format($average, 2). ", ".
                 "Status: $status<br>";             
        }
    ?>
</body>
</html>