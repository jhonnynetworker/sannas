<?php

  // You can access the values posted by jQuery.ajax
  // through the global variable $_POST, like this:
  //$input = $_POST["text"];

  $input = $_POST['text'];

  $curl = curl_init();
	$post_args = array(
     'context' => $input
  );

	$header_args = array(
		'Content-Type: text/plain',
		'Accept: application/json'
	);

	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post_args));
  //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  //curl_setopt($curl, CURLOPT_USERPWD, "163821a8-e6aa-4733-99b7-49d5a798e75b:UxmCydi6Q2Se");
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
	//curl_setopt($curl, CURLOPT_URL, "https://watson-api-explorer.mybluemix.net/conversation/api/v1/workspaces/d72d9560-eb2b-4562-89a3-d9491ff0f41a/message?version=2016-09-20");
  curl_setopt($curl, CURLOPT_URL, "http://wodometro.mybluemix.net/app");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($curl);
	curl_close($curl);
	//var_dump($result);

  $decoded = json_decode($result, true);

  //return $result;

  //echo  '<pre>';
  print_r($result);
?>
