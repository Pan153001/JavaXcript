<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวนภาษี</title>
</head>
<body>
    <table border="1" width="20%" align="center">
        <td colspan="2" align="center">คำนวนภาษี</td><tr>
        <td>
        <?php
        
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];

        $income = ($num1*12) - $num2 - $num3;
        if($income < 150000){
            $trate = 0;
        }
        else if($income <= 300000){
            $trate = 5;
        }
        else if($income <= 500000){
            $trate = 10;
        }
        else if($income <= 750000){
            $trate = 15;
        }
        else if($income <= 1000000){
            $trate = 20;
        }
        else if($income <= 2000000){
            $trate = 25;
        }
        else if($income <= 5000000){
            $trate = 30;
        }
        else if($income > 5000000){
            $trate = 35;
        }
        $tax = ($income * $trate) / 100;
        echo "เงินได้สุทธิ = $income<br>";
        echo "ภาษี = $income * $trate = $tax";

        ?>
        </td>
    </table>
</body>
</html>