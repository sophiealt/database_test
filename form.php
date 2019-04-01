<!doctype html>
<html>
<head>
    <title>form</title>
</head>
<body>
<?php include "connection.php";
 include "insert.php";
 ?>

<form action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?= isset($_GET['red']) ? $users['name'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?= isset($_GET['red']) ? $users['email'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>
                <select name="country" id="country">
                    <?php
                    $sql_countries = mysqli_query($conn, 'SELECT `countries` FROM `countries`');
                    foreach ($sql_countries as $sql_country) {
                        ?>
                        <option value="<?=$sql_country['countries']?>"><?=$sql_country['countries']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
<?php include "getdata.php";?>
</body>
</html>