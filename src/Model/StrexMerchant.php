<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

class StrexMerchant extends AbstractModel
{
    protected $merchantId;
    protected $shortNumberIds;
    protected $password;

    protected function attributes()
    {
        return [
          'merchantId',
          'shortNumberIds',
          'password',
        ];
    }

    public function getIdentifier()
    {
        return $this->getMerchantId();
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function setMerchantId($merchantId = null)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    public function getShortNumberIds()
    {
        return $this->shortNumberIds;
    }

    public function setShortNumberIds($shortNumberIds = null)
    {
        $this->shortNumberIds = $shortNumberIds;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password = null)
    {
        $this->password = $password;
        return $this;
    }
}
