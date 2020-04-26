<?php
require_once('../includes/database.php');

//if (isset($_REQUEST['id']) && $_REQUEST['id'] >= 0)
	$id = $_REQUEST['id'];
    $likeCount = $database->incrementLike($id);
    echo "( " . $likeCount . " Likes)";
//}

?>