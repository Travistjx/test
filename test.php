<!DOCTYPE html>
<html>
<head>
	<title>File Upload Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			max-width: 500px;
			margin: 0 auto;
			text-align: center;
		}
		h2 {
			margin-top: 0;
			color: #333;
		}
		::file-selector-button {
		  display: none;
		  
		}
		input[type=file] {
			
		}
		
		label {
			display: inline-block;
			text-decoration: underline;
			color: blue;
		}
		
		label:hover {
			cursor: pointer;
		}
		.filename {
			font-size: 14px;
			color: #777;
		}
		.submit-btn {
			margin-top: 20px;
			background-color: #5cb85c;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		.submit-btn:hover {
			background-color: #4cae4c;
		}
		.dropzone {
			border: 2px dashed #ccc;
			padding: 20px;
			text-align: center;
			cursor: pointer;
		}
		.dropzone:hover {
			background-color: #f4f4f4;
		}
		
		.dropzone.dragover {
			background-color: silver;
			
		}
	</style>
</head>
<body>
	<form method="post" action = "" enctype="multipart/form-data">

			<div style = "margin-left: 140px; margin-bottom: 10px;">
		File chosen: <input type="file" name="file" id="file-upload"></div>
		<div class="filename"></div>
		<div class="dropzone" id="dropzone">Drop file here or <label for="file-upload">Choose File</label></div>
		<input type="submit" name="submit" value="Upload" class="submit-btn">
	</form>
	
	<?php 
	$command = 'http://testfyp.herokuapp.com/test.php/';
		$output = file_get_content($command);
		echo $output;
	
	if (isset($_POST['submit'])){
		
	}
	?>
	<script>
		var dropzone = document.getElementById('dropzone');
		dropzone.ondragover = function() {
			this.className = 'dropzone dragover';
			return false;
		}
		dropzone.ondragleave = function() {
			this.className = 'dropzone';
			return false;
		}
		dropzone.ondrop = function(e) {
			e.preventDefault();
			this.className = 'dropzone';
			document.getElementById('file-upload').files = e.dataTransfer.files;
			
		}

	</script>

	

</body>
