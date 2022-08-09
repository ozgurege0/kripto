<?php
$url= 'https://payid19.com/api/v1/get_invoices';

$post = [
'public_key' => 's8bzLSan5gWEKGUiZMgAkJucr',
'private_key' => 'nIZKn9Foq7cir75Bqt1giAqNXQ4ph5ZozNiaaMQEkSUnI',
'order_id' => '11'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post));
$result = curl_exec($ch);
curl_close($ch);
if(json_decode($result)->status=='error'){
//error
echo json_decode($result);
//success
}else{
echo json_decode($result)->message;
}