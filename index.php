<?php
  // initialize
  $IP = "N/A";

  // detection
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $IP = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['X-Real-IP'])) {
      $IP = $_SERVER['X-Real-IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
      $IP = $_SERVER['REMOTE_ADDR'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>What is my IP address?</title>
    <style>
      .outer-box { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); }
      .ip-box { font-size: 48pt; font-weight: bold; }
    </style>
  </head>
  <body>
    <div class="outer-box">
      <span class="ip-box"><?php echo $IP; ?></span>
    </div>
  </body>
</html>
