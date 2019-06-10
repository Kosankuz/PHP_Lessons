

<?php

require_once 'env.php';

$accessToken = $aToken;
$apiUrl = 'https://www.googleapis.com/userinfo/v2/me';

$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$accessToken]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);

if ($json) {
    $data = json_decode($json);
    $pict = $data->picture;

}
?>
<img width="100" height="100" src="<?php echo $pict ?>" alt="">