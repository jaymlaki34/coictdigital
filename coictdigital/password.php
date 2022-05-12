<?php
$password = "mndeme";

$hashed_password =
    password_hash($password, PASSWORD_DEFAULT);

echo "Original Password is: ", $password;
echo "<br>";

echo "Hashed Password is: ", $hashed_password;
echo "<br>";

if (password_verify($password, $hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


//first compare old password with password
// if(password is correct){
//     update passwod
// }