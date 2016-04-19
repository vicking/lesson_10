<?php
	if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["message"]))
	{
		echo "User <strong>".$_POST["name"]."</strong> from <em>".$_POST["email"]."</em> send you a message:<br>";
		echo "<pre>".$_POST["message"]."</pre><br><br>";
		echo "<button onclick='history.go(-1);''>Back</button>";
	}
?>