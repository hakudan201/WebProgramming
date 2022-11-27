<?php
$validation_error_1 = "";
$validation_error_2 = "";
$validation_error_3 = "";
$user_url = "";
$form_message = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_email = $_POST["email"];
  //filter_var($email, FILTER_VALIDATE_EMAIL) should use filter_var
  //test@example.com
  if (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $user_email)) {
    $form_message = "Thank you for your submission.";
  } else {
    $validation_error_1 = "* This is an invalid Email.";
    $form_message = "Please retry and submit your form again.";
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_url = ($_POST["url"]);
  //filter_var($url, FILTER_VALIDATE_URL) should use filter_var
  if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $user_url)) {
    $form_message = "Thank you for your submission.";
  } else {
    $validation_error_2 = "* This is an invalid URL.";
    $form_message = "Please retry and submit your form again.";
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_number = ($_POST["number"]);
  //check for phone number with 10 digits, start with 0 and only numbers
  if (preg_match("/^0[0-9]{9}+$/", $user_number)) {
    $form_message = "Thank you for your submission.";
  } else {
    $validation_error_3 = "* This is an invalid phone number.";
    $form_message = "Please retry and submit your form again.";
  }
}
?>



<form method="post" action="">
  Enter your email address:
  <br>
  <input type="text" name="email" size="30" value="<?php echo $user_email; ?>">
  <span class="error"><?= $validation_error_1; ?></span>
  <br>
  <br>
  Enter a website url:
  <br>
  <input type="text" name="url" size="30" value="<?php echo $user_url; ?>">
  <span class="error"><?= $validation_error_2; ?></span>
  <br>
  <br>
  Enter a phone number:
  <br>
  <input type="text" name="number" size="30" value="<?php echo $user_number; ?>">
  <span class="error"><?= $validation_error_3; ?></span>
  <br>
  <input type="submit" value="Submit">
</form>
<p> <?= $form_message; ?> </p>
