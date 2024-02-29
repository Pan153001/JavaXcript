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
    <?php
        echo "<pre>";
        for ($i = 1; $i < 8; $i++) {
            for ($j = $i; $j < 8; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        $n = 8;
        for ($i = 8; $i > 0; $i--) {
            for ($j = $n - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        echo "</pre>";
    ?>
    </td>

    </table>
</body>
</html>