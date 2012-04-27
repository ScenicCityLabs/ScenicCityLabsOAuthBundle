Usage
=====

use ScenicCityLabs\OAuthBundle\OAuthConsumer;
use ScenicCityLabs\OAuthBundle\OAuthToken;
use ScenicCityLabs\OAuthBundle\OAuthRequest;
use ScenicCityLabs\OAuthBundle\OAuthSignatureMethod\HMAC\SHA1;

$consumer = new OAuthConsumer("consumer_key", "consumer_secret");
$token    = new OAuthToken("token", "token_secret");
$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $http_url,array('param'=>'value));
$oauthrequest->sign_request(new SHA1(), $consumer, $token);
$signed_url = $oauthrequest->to_url();
$ch = curl_init($signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);
return json_decode($data);