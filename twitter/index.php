<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "42608033-iT1O0zOhMYPitjA2kXdG1ynvS2kF76zEkhDw3eQN1",
    'oauth_access_token_secret' => "6KYlvsz2se5VznKP3TKBK54KL62GxzE6u20q46hzXE1jB",
    'consumer_key' => "yYrQADuHH3LRhnd64k9pNg",
    'consumer_secret' => "Ul9yihShoOnupvTwad2l5BCjWMTZ8DmfNaZYjNmQ"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
