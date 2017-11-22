<form method="POST">
kasih tau foldernya ya : 
<input type="text" name="path" style="width: 100%;" />
<input type="submit" />
</form>

<?php



if(!empty($_POST)){
	
	$path = $_POST["path"];
	
	if(strlen($path) && is_dir($path)){
		
		$exp_path = explode(":/", $path);
		
		$path = "/".$exp_path[0].$exp_path[1];
		
		$str_command = "git pull ".trim($path);
		
		echo exec($str_command);
		
		echo "<br />";
		
	}else{
		echo "ga nemu bro<br />";
	}
	
	
}



?>