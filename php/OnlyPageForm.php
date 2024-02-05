<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Only Page</title>
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

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
        <table width ="50%" align ="center" border ="1">
            <tr>
                <td colspan="2" align ="center" style="background-color: #4CAF50" style="border:solid #45a049";>
                    <big><b>ข้อมูลศึกษา</b></big>
                </td>
            </tr>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" name="name" size="59"></td>
            </tr>
            <tr>
                <td>นามสกุล</td>
                <td><input type="text" name="sername" size="58"></td>
            </tr>
            <tr>
                <td>วันเกิด</td>
                    <td><form action="/action_page.php">
                        <input type="date" id="birthday" name="birthday">
                    </form></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    <select name="gender">
                        <option value="">Select...</option>
                        <option value="male">Male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><input type="text" name="stdid" size="58"></td>
            </tr>
            <tr>
                <td>เลขบัตรประชาชน</td>
                <td><input type="text" name="idcard" size="58"></td>
            </tr>
            <tr>
                <td>Address :</td>
                <td colspan="2">
                    <textarea name="address" cols="55" rows="5"></textarea>
                    <br><br>
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align ="center">
                    <input name="btnSubmit" type="submit" value="OK">
                    <a href="http://localhost/6506021621021/OnlyPageForm.php"><input name="btnReset" type="submit" value="Return"></a>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['btnSubmit'])){
            $name = $_GET['name'];
            $sername = $_GET['sername'];
            $stdid = $_GET['stdid'];
            $birthday = $_GET['birthday'];
            $idcard = $_GET['idcard'];
            $gender = $_GET['gender'];
            $address = $_GET['address'];

            /*$birthdate = new DateTime($birthday);
            $currentDate = new DateTime();
            $age = $birthdate->diff($currentDate)->y;*/

            $today = date('Y-m-d');
            $diff = date_diff(date_create($birthday), date_create($today));
            echo $diff->format('%y years, %m months and %d days');


            
            echo "<table width='50%' align='center' border='1'";
            echo "<tr><td colspan='2' align='center' style='background-color: #4CAF50'><big><b>แบบฟอร์มนักศึกษา</b></big></td></tr>";
            echo "<tr><td>ชื่อ</td><td>$name</td></tr>";
            echo "<tr><td>นามสกุล</td><td>$sername</td></tr>";
            echo "<tr><td>วันเกิด</td><td>$birthday (อายุ: $age ปี)</td></tr>";
            echo "<tr><td>รหัสนักศึกษา</td><td>$stdid</td></tr>";
            echo "<tr><td>เลขบัตรประชาชน</td><td>$idcard</td></tr>";
            echo "<tr><td>เพศ</td><td>$gender</td></tr>";
            echo "<tr><td>ที่อยู่</td><td>$address</td></tr>";
            echo "</table>";
            } 
            else{}
    ?>
</body>
</html>


