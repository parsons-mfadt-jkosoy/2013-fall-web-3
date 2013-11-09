<?php
	$key = '4KGAGU3DMTCR6RWCDVRRVLBAE3MR2BFH2625MHGKF5B7DTWX65OQ'; // your access key
	$secret = 'MS8JE3TFVIEWPLQNFRK49I2HHFACJF8BBM9PA0K0J596P82UO0D3Q1V1FG84LHFF'; // your secret key

	$oauth = new OAuth($key,$secret);
	$oauth->fetch("https://openpaths.cc/api/1",OAUTH_SIG_METHOD_HMACSHA1);
    $response = $oauth->getLastResponse();

    $result = array();
    $result['status'] = 'okay';
    if(!$response) {
    	$result['status'] = 'error';
    	$result['message'] = 'There was an error connecting to the API.';
    }
    else {
    	$result['data'] = json_decode($response,true);
    }

    header('Content-type:application/json');
    echo json_encode($result);
?>