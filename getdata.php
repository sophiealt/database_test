<?php
$sql = mysqli_query($conn, 'SELECT `ID`, `name`, `email`, `country` FROM `users`');
while ($result = mysqli_fetch_array($sql)) {
    echo "<p>{$result['ID']}) {$result['name']} - {$result['email']} - {$result['country']} - <a href='?del={$result['ID']}'>Delete</a> - <a href='?red={$result['ID']}'>Change</a></p>";
}


?>