<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>findNum</title>
</head>
<body>
    <table border="1" width="20%">
        <td>
            <?php

                $Fnum = $_GET['number1'];
                $Lnum = $_GET['number2'];
                $result = 0;
                echo "<center>RESULT</td><tr>";
                echo "<td>First number : <i>$Fnum </i> <tr>";
                echo "<td>Last number : <i>$Lnum </i> <tr>";
                echo "<td>Result : ";
                for($Lnum; $Lnum >= $Fnum; $Lnum--){
                    if($Lnum % 12 == 0){
                        echo "$Lnum";
                        break;
                    }   
                }
            ?>
        </td>
    </table>
</body>
</html>