<?php


if (isset($_POST["name"])) {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('This email is already in use');
    }
    $select = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
        exit('This email is already exist');
    }
//
    if (isset($_GET['red'])) {
        $sql = mysqli_query($conn, "UPDATE `users` SET `Name` = '{$_POST['name']}',`Email` = '{$_POST['email']}', `country` = '{$_POST['country']}' WHERE `ID`={$_GET['red']}");
    } else {
//
        $sql = mysqli_query($conn, "INSERT INTO `users` (`name`, `email`, `country`) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['country']}')");
    }

//Success
    if ($sql) {
        echo '<p>Done!</p>';
    } else {
        echo '<p>Error ' . mysqli_error($conn) . '</p>';
    }
}


//Delete
if (isset($_GET['del'])) {
    $sql = mysqli_query($conn, "DELETE FROM `users` WHERE `ID` = {$_GET['del']}");
    if ($sql) {
        echo "<p>Deleted</p>";
    } else {
        echo '<p>Error: ' . mysqli_error($conn) . '</p>';
    }
}

//Get data
if (isset($_GET['red'])) {
    $sql = mysqli_query($conn, "SELECT `ID`, `name`, `email`, `country` FROM `users` WHERE `ID`={$_GET['red']}");
    $users = mysqli_fetch_array($sql);
}
?>