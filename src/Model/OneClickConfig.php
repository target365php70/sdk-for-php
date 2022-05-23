<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Attribute\DateTimeAttribute;
use Target365\ApiSdk\Exception\ApiClientException;

class OneClickConfig extends AbstractModel
{
    protected $configId;
    protected $shortNumber;
    protected $merchantId;
    protected $serviceCode;
    protected $businessModel;
    protected $recurring;
    protected $redirectUrl;
    protected $onlineText;
    protected $offlineText;
    protected $age;
    protected $isRestricted;
    protected $invoiceText;
    protected $price;
    protected $subscriptionPrice;
    protected $subscriptionInterval;
    protected $subscriptionStartSms;
    protected $timeout;
    protected $created;
    protected $lastModified;

    protected function attributes()
    {
        return [
            'configId',
            'shortNumber',
            'merchantId',
            'serviceCode',
            'businessModel',
            'recurring',
            'redirectUrl',
            'onlineText',
            'offlineText',
            'age',
            'isRestricted',
            'invoiceText',
            'price',
            'subscriptionPrice',
            'subscriptionInterval',
            'subscriptionStartSms',
            'timeout',
            'created',
            'lastModified',
        ];
    }

    /**
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->configId;
    }

    public function getConfigId()
    {
        return $this->configId;
    }

    public function setConfigId(string $configId)
    {
        $this->configId = $configId;
        return $this;
    }

    public function getShortNumber()
    {
        return $this->shortNumber;
    }

    public function setShortNumber(string $shortNumber)
    {
        $this->shortNumber = $shortNumber;
        return $this;
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

    public function getRecurring()
    {
        return $this->recurring;
    }

    public function setRecurring($recurring = null)
    {
        $this->recurring = $recurring;
        return $this;
    }

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl($redirectUrl = null)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getOnlineText()
    {
        return $this->onlineText;
    }

    public function setOnlineText($onlineText = null)
    {
        $this->onlineText = $onlineText;
        return $this;
    }

    public function getOfflineText()
    {
        return $this->offlineText;
    }

    public function setOfflineText($offlineText = null)
    {
        $this->offlineText = $offlineText;
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

    public function getSubscriptionPrice()
    {
        return $this->subscriptionPrice;
    }

    public function setSubscriptionPrice(float $subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;
        return $this;
    }

    public function getSubscriptionInterval()
    {
        return $this->subscriptionInterval;
    }

    public function setSubscriptionInterval(string $subscriptionInterval)
    {
        $this->subscriptionInterval = $subscriptionInterval;
        return $this;
    }

	public function getSubscriptionStartSms()
    {
        return $this->subscriptionStartSms;
    }

    public function setSubscriptionStartSms(string $subscriptionStartSms)
    {
        $this->setSubscriptionStartSms = $subscriptionStartSms;
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

    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     * @return StrexTransaction
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setLastModified(string $lastModified)
    {
        $this->lastModified = new DateTimeAttribute($lastModified);
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return StrexTransaction
     * @throws \Target365\ApiSdk\Exception\ApiClientException
     */
    public function setCreated(string $created)
    {
        $this->created = new DateTimeAttribute($created);
        return $this;
    }
}
