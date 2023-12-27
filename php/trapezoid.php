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
                $r = 3;
                $h = 10;
                $cal = (($w * $r) *$h)/ 2;
                echo "
                        <td colspan='2'><center><font size ='6'>คำนวนพื้นที่สามเหลี่ยม</td><tr>
                        <td><font size ='5'>ผลรวมด้านคู่ขนาน</td>
                        <td align='right'><font size ='5'> $w</td><tr>
                        <td><font size ='5'>สูง</td> 
                        <td align='right'><font size ='5'>$h</td><tr> 
                        <td><font size ='5'>คำนวนพื้นที่สี่เหลี่ยมคางหมู : (($w * $r) * $h) / 2</td><br> 
                        <td align='right'><font size ='5'>$cal</td>                    
                    ";
            ?>
    </table>
</body>
</html>