<?php>
    // get graduate id and token
    $id = $_GET["id"]
    $token = $_GET["token"]

    // create curl resource
    $ch = curl_init();

    $url = "https://wishes.permisi.hk/api/v2/graduates/login"

    // set url to point to login url
    curl_setopt($ch, CURLOPT_URL, $url);

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $response contains the response string
    $response = curl_exec($ch);

    $data = json_decode($response)

    $access_token = $data->data->accessToken

    // close curl resource to free up system resources
    curl_close($ch);
</?>