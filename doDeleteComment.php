<?php
namespace View;
use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;

require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();

$timestamp = $_POST['deleteid'];
$mypage = $_SESSION['page'];
$username = $_SESSION['loginuser'];

if(ctype_print($timestamp) && ctype_print($mypage) && ctype_print($username)){
  $controller = SessionManager::getController();
  $controller->deleteComment($username, $mypage, $timestamp);

  if($controller->deleteComment($username, $mypage, $timestamp)){
      header("location: $mypage.php");
  }
}
?>
