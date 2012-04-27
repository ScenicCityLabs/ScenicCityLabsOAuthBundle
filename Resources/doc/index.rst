Usage
=====

    $consumer = new sfOAuthConsumer("consumer_key", "consumer_secret");
    $token    = new sfOAuthToken("sfYelp_token", "token_secret");
    $oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $http_url,array('param'=>'value));
    $oauthrequest->sign_request(new sfOAuthSignatureMethod\HMAC\SHA1(), $consumer, $token);
    $signed_url = $oauthrequest->to_url();
    $ch = curl_init($signed_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data);