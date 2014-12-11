<?php
include("../connection.php");
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0){
	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	
	if($fileSize < 1024000){
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
	
	
		$sql = "UPDATE student SET ImageUpload='$content' WHERE stuid='st5484781c8098c'";
		
		if ($conn->query($sql) === TRUE) {
			echo "File $fileName uploaded";
		} else {
			echo "Error updating record: " . $conn->error;
		}
	}else{
		echo "file size is too big, upload less than 1 MB";	
	}
}
?>
<form method="post" enctype="multipart/form-data">
    <input accept="image/*" name="userfile" type="file">
    <!--<input name="upload" type="submit" class="box" id="upload" value=" Upload ">-->
    <button name="upload" type="submit">Upload</button>
</form>