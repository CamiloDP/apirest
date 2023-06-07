<?php 

$usuario = $_POST['name'];


$token = '6230182117:AAGfoHndEpoO561vpV8KSA0qpr9D_XFMzcI';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);
// var_dump($update);

// $chatId = $update['message']['chat']['id'];
// $message = $update['message']['text'];


$response = "Acaban de ingresar este nombre".$usuario;


echo $response;
// switch($message) {
//     case '/start':
//         $response = 'Me has iniciado';
//         sendMessage($chatId, $response);
//         break;
//     case '/info':
//         $response = 'Hola! Soy @trecno_bot';
//         sendMessage($chatId, $response);
//         break;
//     default:
//         $response = 'No te he entendido';
//         sendMessage($chatId, $response);
//         break;
// }
// sendMessage($response);
// sendMessage2($response);
// header('Location: dinamica.html');
// function sendMessage($response) {
//   $id = '2041236937';
//     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$id.'&parse_mode=HTML&text='.urlencode($response);
//     file_get_contents($url);
// }






?>


