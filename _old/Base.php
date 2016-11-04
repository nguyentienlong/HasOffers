<?php

namespace BrianFaust\Grasp\HasOffers;

class Base
{
    private $httpClient;

    protected $endpointType;

    protected $endpointName;

    public function __construct($httpClient)
    {
        $this->setHttpClient($httpClient);
        $this->getHttpClient()->setApiType($this->endpointType);
        $this->getHttpClient()->setApiNamespace($this->endpointName);
    }

    public function get($path, $parameters = [])
    {
        return $this->getHttpClient()->get($path, $parameters);
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getEndpointType()
    {
        return $this->endpointType;
    }

    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
    }

    public function getEndpointName()
    {
        return $this->endpointName;
    }

    public function setEndpointName($endpointName)
    {
        $this->endpointName = $endpointName;
    }
}
