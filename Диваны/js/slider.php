<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'Viktor' && $pas == 1122)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else
$script = 'avtadministrator.html';
header("Location: $script");
?>
<!DOCTYPE html>
<html>
<head>
<title>Страница</title>
<meta charset="utf-8">
</head>
<body>
<form action="newart.php" method="post">
<p>Название статьи:</p>
<input name="nameart">
<p>Текст статьи:</p>
<textarea name="text"></textarea>
<p>Текст ссылки в меню:</p>
<input name="menu">
<input type="submit" value="Добавить статью">
</form>
</body>
</html>