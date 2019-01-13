<?php
namespace View;
header( "Cache-Control: max-age=<50>"); // This one is lower cause we want it to be uppdated more frequently
use Tasty\Controller\SessionManager;
$this_directory = __DIR__;
$file_to_include = $this_directory.'/classes/Tasty/Controller/SessionManager.php';
require_once $file_to_include;

$controller = SessionManager::getController();
$_SESSION['page'] = basename($_SERVER['REQUEST_URI'], ".php");
$comments = $controller->showComments($_SESSION['page']);
//var_dump($select);

//echo "string";
//var_dump(mysqli_fetch_array($select));
/*foreach ($comments as $comment) {
  echo "<ul class='commentstop'><li>".$comment->getComment(). "<br>" .$comment->getUsername(). ":"."</li></ul>";
  echo "<ul class='comments'><li>".$comment->getComment()."</li></ul>"

}*/
foreach ($comments as $comment)
{
    if(isset($_SESSION['loginuser'])) {
        if(strtolower($comment->getUsername()) == strtolower($_SESSION['loginuser'])){
            $timestamp = $comment->getTime();?>

            <form action='doDeleteComment.php' id='removecommentform' method = 'post'>
                <button id='delete'>Delete</button>
                <input type='hidden' name='deleteid' value='<?php echo"$timestamp";?>'required/>
            </form>
            <?php
        }}
    echo "<ul class='commentstop'><li>".$comment->getTime(). "<br>" . $comment->getUsername(). ":"."</li></ul>";
    echo "<ul class='comments'><li>".$comment->getComment()."</li></ul>";
}
if(isset($_SESSION['loginuser'])) {
    require_once('resources/views/comments.php');
}
else{
    ?><h3><a href='showLogin.php'>Please login to write comments!</a></h3></div><?php }
?>
