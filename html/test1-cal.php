<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <table border="1" align ="center">
    <td>
    <?php
    $num = $_GET['Number'];

    echo "ผลลัพของการรันโปรแกรม<br>";
    for($x = 1; $x <= $num; $x++){
        echo "Row : $x&nbsp&nbsp";
            for($y = 2; $y <= $x; $y++){
                echo "<font color ='#66FF00'>*</font>";
            }
        echo "<font color ='#66FF00'>*</font><br>";
    }
    ?>
    </td>

    </table>
</body>
</html>