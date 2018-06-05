<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method='post'>
      <label for='name'>Name</label>
      <input name='name' type='text' required>

      <label for='email'>Email</label>
      <input name='email' type='email' required>

      <label for='pWord'>Password</label>
      <input name='pWord' type='password' required>

      <input type='submit' name='login' value='login'>
  </body>
</html>
<?php

$name = '';
$email = '';
$pWordHash = '';
if (isset($submit)){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pWordHash = password_hash($_POST['pWord'], PASSWORD_DEFAULT);
  DB::insert("INSERT INTO users (name, email, pWord) VALUES ('$name', '$email', '$pWordHash')");
} ?>
