<?php
function execute_data($api_call, $data, $call_type) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_PORT => "3000",
        CURLOPT_URL => "http://localhost:3000/api/" . $api_call,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $call_type,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "cache-control: no-cache"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        return $err;
    } else {
        return json_decode($response, true);
    }
}
