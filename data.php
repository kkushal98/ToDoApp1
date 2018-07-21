
<?php


if (isset($_POST['task']) && isset($_POST['description'])){
	$data= 'Task '. $_POST['task']. ','. ' Description '. $_POST['description']."\r\n";
	$file= file_put_contents('/Users/Kushal/Sites/todo/data.txt', $data, FILE_APPEND|LOCK_EX);
	
	echo $file;
	exit();
	if($file==false){
		die('Error writing file');

	}
	else{
		echo "$file bytes written to file";
	}
}
	else{
	echo('no post data to process');
}
	

?>
