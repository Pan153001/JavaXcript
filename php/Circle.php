<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regtangle</title>
    <style>table, td {border: 1px solid black;}</style>
</head>
<body>
    <table width = 40% align ="center">
            <?php
                $w = 5;
                $cal = $w * $w;
                echo "
                        <td colspan='2'><center><font size ='6'>คำนวนพื้นที่วงกลม</td><tr>
                        <td><font size ='5'>รัสมี</td>
                        <td align='right'><font size ='5'> $w</td><tr>
                        <td><font size ='5'>คำนวนพื้นที่วงกลม : $w * $w</td><br> 
                        <td align='right'><font size ='5'>$cal</td>                    
                    ";
            ?>
    </table>
</body>
</html>