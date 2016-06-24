<?php
  $icon_prefix = $_POST["icon_prefix"];
  $subject = $_POST["email"];
  $comment = $_POST["message"];
  $admin_email = "isaacaddis21@gmail.com";
  mail($admin_email, "$subject", $comment);
  
?>
