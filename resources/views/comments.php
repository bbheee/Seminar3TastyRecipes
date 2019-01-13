<?php
$mypage = $_SESSION['page'];
header( "Cache-Control: max-age=<350>");
?>

<textarea name="comment" form="commentform" class="writebox" placeholder="Enter comment here..." required></textarea>
<form action="../../doComment.php" id="commentform" method = "post">
    <button id="submit">Comment</button>
    <input type='hidden' name='thepage' value='<?php echo "$mypage";?>'/>
</form>
