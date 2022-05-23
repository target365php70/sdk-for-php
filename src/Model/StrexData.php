<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Exception\ApiClientException;

class StrexData extends AbstractModel
{
    protected $merchantId;
    protected $serviceCode;
    protected $businessModel;
    protected $age;
    protected $isRestricted;
    protected $smsConfirmation;
    protected $invoiceText;
    protected $price;
    protected $timeout;
    protected $billed;
    protected $resultCode;
    protected $resultDescription;

    protected function attributes()
    {
        return [
            'merchantId',
            'serviceCode',
            'businessModel',
            'age',
            'isRestricted',
            'smsConfirmation',
            'invoiceText',
            'price',
            'timeout',
            'billed',
            'resultCode',
            'resultDescription',
        ];
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return null;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function setMerchantId(string $merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode(string $serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }
    
    public function getBusinessModel()
    {
        return $this->businessModel;
    }

    public function setBusinessModel($businessModel = null)
    {
        $this->businessModel = $businessModel;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age = null)
    {
        $this->age = $age;
        return $this;
    }

    public function getIsRestricted()
    {
        return $this->isRestricted;
    }

    public function setIsRestricted($isRestricted = null)
    {
        $this->isRestricted = $isRestricted;
        return $this;
    }

    public function getSmsConfirmation()
    {
        return $this->smsConfirmation;
    }

    public function setSmsConfirmation($smsConfirmation = null)
    {
        $this->smsConfirmation = $smsConfirmation;
        return $this;
    }

    public function getInvoiceText()
    {
        return $this->invoiceText;
    }

    public function setInvoiceText(string $invoiceText)
    {
        $this->invoiceText = $invoiceText;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function setTimeout($timeout = null)
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getBilled()
    {
        return $this->billed;
    }

    public function setBilled($billed = null)
    {
        $this->billed = $billed;
        return $this;
    }

    public function getResultCode()
    {
        return $this->resultCode;
    }

    public function setResultCode($resultCode = null)
    {
        $this->resultCode = $resultCode;
        return $this;
    }

    public function getResultDescription()
    {
        return $this->resultDescription;
    }

    public function setResultDescription($resultDescription = null)
    {
        $this->resultDescription = $resultDescription;
        return $this;
    }
}
