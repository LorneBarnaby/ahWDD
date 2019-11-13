<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = hash("sha256", $password);
    $hashed_username = hash("sha256", $username);
    $target_username = hash("sha256", "lorne");
    $target_password = "909104cdb5b06af2606ed4a197b07d09d5ef9a4aad97780c2fe48053bce2be52";
?>

<form action="login.php" method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit">
</form>

<?php 
    echo $username . "<br>";
    if ($hashed_username === $target_username && $hashed_password === $target_password){
        echo "woo";
    } else {
        echo "suck it";
    }
?>