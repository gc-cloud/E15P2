<!doctype html>
<html>
<head>

    <title>Hello World</title>
    <meta charset='utf-8'>

</head>
<body>

<?php
  echo 'Hello World! <br/>';
?>

<?php
  echo 'The requesting browser is: ';
  echo $_SERVER['HTTP_USER_AGENT'];
  echo '<br/>';
  echo 'The remote port is: ';
  echo $_SERVER['REMOTE_PORT'];
  echo '<br/>';
?>

<!-- Make a comment about which browser is being used -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br/>';
} else {
    echo 'You are not using Internet Explorer.<br/>';
}
echo '<br/>';
?>

<!-- Check some interesting variables-->
<?php
  echo 'Server name: ';
  echo $_SERVER['SERVER_NAME'] . '<br/>';
  echo 'Document root: ';
  echo  $_SERVER['DOCUMENT_ROOT'].'<br/>';
?>


</body>
</html>
