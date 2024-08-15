<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked 
        <input type="text" name = "days" method="get"><br /><br />
        Employee Status:
        <select name = "employeeStatus">
            <option>Regular</option>
            <option>Probationary</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select name = "civilStatus">
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
        </select><br /><br />
        <button>Compute Salary</button>
    </form><br /><br />
    <?php
        if(isset($_GET["days"]) && isset($_GET["employeeStatus"]) && isset($_GET["civilStatus"])){

            $days = (int)$_GET["days"];
            $empStats = $_GET["employeeStatus"];
            $civilStats = $_GET["civilStatus"];

            if($empStats == "Regular")
                $gross = $days * 500;
            elseif($empStats == "Probationary")
                $gross = $days * 400;
            elseif($empStats == "Casual")
                $gross = $days * 300;

            if($civilStats == "Single"){
                $tax = 0.12 * 100;
                $deduction = $gross * 0.12;
                $netSalary = $gross - $deduction;
            }
            elseif($civilStats == "Married"){
                $tax = 0.1 * 100;
                $deduction = $gross * 0.1;
                $netSalary = $gross - $deduction;               
            }
            elseif($civilStats == "Widow"){
                $tax = 0.07 * 100;
                $deduction = $gross * 0.07;
                $netSalary = $gross - $deduction;               
            }

        }
        echo "Gross Salary: ", number_format($gross, 2) ,"<br />";
        echo "Tax: ", $tax , "%<br />";
        echo "Deduction: ", number_format($deduction,2),"<br />";
        echo "Net Salary: ", number_format($netSalary,2),"<br />";
    ?>


</body>

</html>