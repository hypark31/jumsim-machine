<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$data = array(
    'x'=> '127.1086228',
    'y'=>'37.4012191'
);

$url = "https://dapi.kakao.com/v2/local/geo/coord2regioncode.json" . "?" .http_build_query($data, '', );


$header = array();
$header[] = 'Content-length: 0';
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: KakaoAK 19b2ad59333b28eb745ce547ba57a094';


$ch = curl_init();                                 //curl 초기화
curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
curl_setopt($ch, CURLOPT_HTTPHEADER,  $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함

$response = curl_exec($ch);
curl_close($ch);

$res_arr = json_decode($response. true);

// echo "===================";
// //echo $res_arr[documents][address_name][0];
// echo "<br/>";
echo $response;



?>