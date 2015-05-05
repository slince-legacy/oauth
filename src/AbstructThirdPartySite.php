<?php
namespace Slince\OAuth;

abstract class AbstructThirdPartySite implements ThirdPartySiteInterface
{

    static $signal;
    
    protected $_clientId;

    protected $_clientSecret;

    function __construct($clientId, $clientSecret)
    {
        $this->_clientId = $clientId;
        $this->_clientSecret = $clientSecret;
    }

    function getClientId()
    {
        return $this->_clientId;
    }

    function setClientId($clientId)
    {
        $this->_clientId = $clientId;
    }

    function getClientSecret()
    {
        return $this->_clientSecret;
    }

    function setClientSecret($clientSecret)
    {
        $this->_clientSecret = $clientSecret;
    }
}