<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormCal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background-computer.jpg') center center fixed;
            background-size: cover;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            opacity: 0.9; /* Adjust opacity as needed */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 0px;
            margin-bottom: 0px;
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $sername = $_GET['sername'];
        $stdid = $_GET['stdid'];
        $gender = $_GET['gender'];
        $address = $_GET['address'];

        echo "<table width='30%' align='center' border='1'";
        echo "<tr><td colspan='2' align='center' style='background-color:#4CAF50'><font size='5'>แบบฟอร์มนักศึกษา</font></td></tr>";
        echo "<tr><td>Name</td><td>$name</td></tr>";
        echo "<tr><td>Sername</td><td>$sername</td></tr>";
        echo "<tr><td>Student ID</td><td>$stdid</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";
        echo "<tr><td colspan='2' align ='center'><a href='http://localhost/6506021621021/formSTD.php' style='text-decoration:none'><input type ='submit' value='Back'></a></td></tr>";
        echo "</table>";
    ?>
</body>
</html>