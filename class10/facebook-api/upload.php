<?php
	$uploadDirectory = '/uploads';
	$filename = $uploadDirectory . '/' . uniqid() . '.png';

	$response = array();
	$response['success'] = true;

	$file = $_FILES['myUploadedFile'];
	if($file['error'] != 0) {
		// there was an error.
		$response['success'] = false;
		$response['error'] = 'There was an error uploading the file';
		$response['error_code'] = 100;
		return echo json_encode($response);
	}

	$success = move_uploaded_file($_FILES['myUploadedFile']['tmp_name'], $filename);
	if(!$success) {
		$response['success'] = false;
		$response['error'] = 'There was an error uploading the file';
		$response['error_code'] = 101;
		return echo json_encode($response);
	}

	$response['filename'] = $filename;
	echo json_encode($response);
?>