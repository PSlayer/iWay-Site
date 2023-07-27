<?php

// echo ('hello');

// header('Content-type: application/json');

// $response = ['message' => 'hello'];

// echo json_encode($response);

$files = file_exists("file.txt");
// $filesContent = file_get_contents('file.txt');
// echo is_dir("hello");
// echo $files;
// echo $filesContent;
// if ($status) {
// 	$message = 'Deleted successfully';
// } else{
// 	$message = 'Sorry';
// }

// $message = 'ddd';

$response = ['message' => $files];
echo json_encode($response);

