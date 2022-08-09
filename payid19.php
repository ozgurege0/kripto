<?php
$email = htmlspecialchars($_POST['email']);

$ucret = htmlspecialchars($_POST['ucret']);

$baslik = htmlspecialchars($_POST['baslik']);

$aciklama = htmlspecialchars($_POST['aciklama']);

$url= 'https://payid19.com/api/v1/create_invoice';

$post = [
'public_key' => 's8bzLSan5gWEKGUiZMgAkJucr',
'private_key' => 'nIZKn9Foq7cir75Bqt1giAqNXQ4ph5ZozNiaaMQEkSUnI',
'email' => $email,
'price_amount' => $ucret,
'price_currency' => 'USD',
'merchant_id' => 5,
'order_id' => DSADAS5D445SA4D,
'customer_id' => 12,
'test' => 1,
'title' => $baslik,
'description' => $aciklama,
'add_fee_to_price' => 1,
'cancel_url' => 'http://localhost/video/',
'success_url' => 'http://localhost/video/index.php?islem=basarili',
'callback_url' => 'http://localhost/video/',
'expiration_date' => 6
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
echo json_decode($result)->message[0];
}else{
//success

$url = json_decode($result)->message;

header("Location:$url");
}