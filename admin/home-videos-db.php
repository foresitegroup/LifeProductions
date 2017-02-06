<?php
include("../inc/dbconfig.php");

switch ($_REQUEST['a']) {
  case "add":
    $mysqli->query("INSERT INTO home_videos (
                  video,
                  image,
                  title,
                  type,
                  publish,
                  sort
                  ) VALUES (
                  '" . $mysqli->real_escape_string($_POST['video']) . "',
                  '" . $mysqli->real_escape_string($_POST['image']) . "',
                  '" . $mysqli->real_escape_string($_POST['title']) . "',
                  '" . $mysqli->real_escape_string($_POST['type']) . "',
                  '" . $_POST['publish'] . "',
                  '0'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE home_videos SET
                  video = '" . $mysqli->real_escape_string($_POST['video']) . "',
                  image = '" . $mysqli->real_escape_string($_POST['image']) . "',
                  title = '" . $mysqli->real_escape_string($_POST['title']) . "',
                  type = '" . $mysqli->real_escape_string($_POST['type']) . "',
                  publish = '" . $_POST['publish'] . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM home_videos WHERE id = '" . $_GET['id'] . "'");
    break;
  case "sort":
    $i = 1;
    foreach ($_REQUEST['item'] as $value) {
      $mysqli->query("UPDATE home_videos SET sort = $i WHERE id = $value");
      $i++;
    }
    break;
  case "toggle":
    $mysqli->query("UPDATE home_videos SET publish = '" . $_POST['pubstate'] . "' WHERE id = " . $_POST['id']);
    break;
}

$mysqli->close();

header( "Location: home-videos.php" );
?>