<?php
// echo validation-token
$v = isset($_SERVER['HTTP_VALIDATION_TOKEN']) ? $_SERVER['HTTP_VALIDATION_TOKEN'] : '';
if (strlen($v) > 0) {
  header("Validation-Token: {$v}");
} else {
  $entityBody = file_get_contents('php://input');
  echo 'Hello world!';
  echo $entityBody;
}
