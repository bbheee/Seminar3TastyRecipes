<?php
namespace View;
use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;

require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();
$username = $_POST['username'];
$password = $_POST['password'];

if(ctype_print($username) && ctype_print($password)){
  $controller = SessionManager::getController();

  if ($controller->login($username, $password)){
      $_SESSION['loginuser'] = $username;
      header("location:index.php");

  }
  else{
     header("location:showLogin.php?LoginFail");
  }
}
SessionManager::storeController($controller);
?>
