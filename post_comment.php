<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=story.php" />
	</head>
	<?php 
		//$name = $_POST["name"];
		$comment = $_POST["comment"];
		$date = $_POST["date"];
		$to_write = array($comment, $date);
		$to_write = implode("\n",$to_write);
		file_put_contents("comments.txt", PHP_EOL.$to_write, FILE_APPEND);
		echo "Your comment has been posted";		
	?>

</html>