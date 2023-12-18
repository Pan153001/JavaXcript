<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="me.css">
    <title>Introduce Myself</title>
    <style>

        h1 {
            text-align: center;
            color: black; 
            background-color: yellow;
            font-size: 50px;
        }

    </style>
</head>
<body>
    <div align = "center">

    <table width = "50%">
        <td>
        <?php
            $name = "นายปัณณวัฒน์ อัญชลิสังกาศ";
            $nickname = "ปัณ";
            $age = 19;
            $hobby = "เล่นเกม";
            $branch = "IT";
            $Ayear = 2;

            echo "<h1>Introduce Myself </h1>";

            echo "<div align = 'center'><img src ='cat.webp' width = '40%' height = '40%'><br>";

            echo "<p class ='font'>ชื่อ-นามสกุล : $name <br>";
            echo "<p class ='font'>ชื่อเล่น : $nickname <br>";
            echo "<p class ='font'>อายุ : $age <br/>";
            echo "<p class ='font'>งานอดิเรก : $hobby <br>";
            echo "<p class ='font'>สาขา : $branch <br>";
            echo "<p class ='font'>ชั้นปีที่ : $Ayear <br><br>";
            echo "<font size = '6'><p><a href ='travel.html' style='text-decoration: none'><b>Travel";

        ?>
        </td>
    </table>
    </div>
</body>
</html>