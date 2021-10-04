<?php
/**
 * @author YoTest-team
 * @version 1.0.0
 * @copyright 重庆艇镫科技有限公司
 * @description PHP后端接口示例
 */

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.fastyotest.com/api/validate",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array( "Content-Type: application/json" ),
    CURLOPT_POSTFIELDS => json_encode(array(
        "token" => "验证凭证，需要通过从前端请求参数中获取",
        "accessId" => "当前项目所属的accessId，可以在后台中进行获取及查看",
        "accessKey" => "当前项目所属的accessKey，可以在后台中进行获取及查看"
    )),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}