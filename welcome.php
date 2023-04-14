<?php
// Starting session
session_start();
 
// Accessing session data
echo 'You are welcome ' . $_SESSION["name"] . ' with email address ' . $_SESSION["email"];
?>
<br><br><br>

<?php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>