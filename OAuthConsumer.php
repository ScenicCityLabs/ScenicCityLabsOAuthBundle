<?php

namespace ScenicCityLabs\OAuthBundle;
/**
 * Description
 *
 * @author      Joshua Estes
 * @copyright
 * @package
 * @subpackage
 * @version
 */

class OAuthConsumer
{

  public $key;
  public $secret;

  function __construct($key, $secret, $callback_url=NULL)
  {
    $this->key = $key;
    $this->secret = $secret;
    $this->callback_url = $callback_url;
  }

  function __toString()
  {
    return "OAuthConsumer[key=$this->key,secret=$this->secret]";
  }

}