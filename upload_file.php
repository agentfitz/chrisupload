<?php

	// general variables are cool
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/x-png", "image/png");
	$tempFileName = $_FILES["file"]["tmp_name"];
	$fileName = $_FILES["file"]["name"];
	$fileType = $_FILES["file"]["type"];
	$fileSize = $_FILES["file"]["size"];
	$errorCode = $_FILES["file"]["error"];
	$extension = end(explode(".", $fileName));
	$uploadPath = "images/" . $fileName;

	// validation checks
	$isValidExtension = in_array($extension, $allowedExts);
	$isValidType = in_array($fileType, $allowedTypes);
	$isValidSize = $fileSize < 200000;
	$hasErrorOccurred = $errorCode > 0;


	if ($isValidType && $isValidSize && $isValidExtension) {

		if ($hasErrorOccurred) {
			echo("there was a problem with the upload");
		}

		else {

			if (file_exists($uploadPath)) {
				echo("this file already exists on the server");
			}

			else {

				echo("everything looks good, place the file where we want it");

				move_uploaded_file(
					$tempFileName,
					$uploadPath
				);

			}
		}

	}

	else {
		
		echo("file doesn't meet validation criteria (i.e. invalid extension)");

	}
	
?>